<?php

namespace App\Http\Controllers;

use App\Models\CCTVList;
use App\Models\CctvModel;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CCTVController extends Controller
{
    public function index(Request $request) : View
    {
        /**
         * Semua variabel dari input yang dilakukan pada form di halaman index
         */

        $today = now()->format('Y-m-d');

        $selectedDate = $request->input('selected_date');

        $cari = $request->input('cari');

        $namaKolom = $request->input('kolom');

        $all = $request->input('all');
        
        $date = Carbon::parse($selectedDate);

        $formattedDate = $date->isoFormat('dddd, D MMMM Y');
        
        /**
         * Kondisi untuk selected date dan search
         */

        if (isset($selectedDate)) {
            
            $data = CctvModel::whereDate('date', $selectedDate)->paginate();
        }
        elseif (isset($cari) && isset($namaKolom)) {
            
            $data = DB::table('cctv_models')->where($namaKolom, 'like', "%$cari%")->latest()->paginate();

            Session::flash('cari', 'search was successful');

            return view('admin.report.cctv', ['cctvs' => $data, 'date' => '']);

        }
        elseif (isset($all)) {
            
            $data = CctvModel::whereDate('date', $today)->paginate(5);

            Session::forget('cari');
        }
        else {
            
            $data = CctvModel::whereDate('date', $today)->paginate(5);
        }

        return view('admin.report.cctv', ['cctvs' => $data, 'date' => $formattedDate]);
    }
    
    /**
     * Store data to table
     * 
     * 
     * @return Redirect
     */
    
    public function store(Request $request)
    {

        // Redirect jika tidak ada aksi yang cocok
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'hardware_name' => 'required',
            'record_status' => 'required',
            'record_desc' => 'required',
            'clean_status' => 'required',
            'clean_desc' => 'required',
            'created_by',
            'updated_by',

        ]);


        // check if validator fail
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $data = new CctvModel;

        $data::create($request->all()); 

        $hardware_name = $request->input('hardware_name');

        $inputDate = $request->input('date');

        $formattedDate = Carbon::parse($inputDate);

        $date = $formattedDate->isoFormat('D MMMM Y');

        $successMessage = "Input {$hardware_name} success tanggal $date";

        $response =[
            'message' => $successMessage,
        ];

        return response()->json($response);
    }

    /**
     * Create page to add data
     * 
     * @return View
     */
    
    public function create(Request $request) : View
    {
        $today = now()->format('Y-m-d');

        $selectedDate = $request->input('selected_date');

        $all = $request->input('all');
        
        $dataDate = Carbon::parse($selectedDate);

        $formattedDate = $dataDate->isoFormat('dddd, D MMMM Y');

        if (isset($selectedDate)) {
            
            $date = $selectedDate;
        }

        elseif (isset($all)) {
            
            $date = $today;
        }

        else {

            $date = $today;
        }

        $list = CCTVList::all(['*']);

        return view('admin.report.cctv.create', ['list' => $list, 'date' => $date, 'formattedDate' => $formattedDate]);
    }

    /**
     * Show selected data
     * 
     * @return View
     */

    public function show(CctvModel $cctv) : View
    {
        $date = Carbon::parse($cctv->date);

        $formattedDate = $date->isoFormat('D MMMM Y');
        $formattedDay = $date->isoFormat('dddd');

        return view('admin.report.cctv.show', ['cctv' => $cctv, 'date' => $formattedDate, 'day' => $formattedDay]);
    }

    /**
     * Edit selected data
     * 
     * @return View
     */

    public function edit(CctvModel $cctv) : View
    {
        $dataDate = $cctv->date;

        $formattedDate = Carbon::parse($dataDate);

        $date = $formattedDate->isoFormat('dddd, D MMMM Y');

        return view('admin.report.cctv.edit', ['cctv' => $cctv, 'date' => $date]);
    }

    /**
     * Update data to database table
     * 
     * @return RedirectResponse
     *
     */

    public function update(Request $request, CctvModel $cctv) : RedirectResponse
    {

        $request->validate([
            'hardware_name' => 'required',
            'record_status' => 'required',
            'record_desc' => 'required',
            'clean_status' => 'required',
            'clean_desc' => 'required',
            'updated_by',
        ]);

        $cctv = CctvModel::findOrFail($cctv->id);
        
        $cctv->update($request->all(['hardware_name', 'record_status', 'record_desc', 'clean_status', 'clean_desc', 'updated_by']));

        $name = $cctv->hardware_name;

        return redirect()->route('cctv.index')->with('success', "Berhasil merubah data $name");
    }

    /**
     * Delete data in database table
     * 
     * @return RedirectResponse
     */

    public function destroy(CctvModel $cctv) : RedirectResponse
    {
        $name = $cctv->hardware_name;

        $cctv->delete();

        return redirect()->route('cctv.index')->with('success',"Berhasil menghapus data $name");
    }
}
