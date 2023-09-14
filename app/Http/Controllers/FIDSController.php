<?php

namespace App\Http\Controllers;

use App\Models\fids;
use App\Models\fidslist;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FIDSController extends Controller
{
    public function index(Request $request) : View
    {
        /**
         * variabel untuk menampung semua input dari cctv index
         */

        $today = now()->format('Y-m-d');
        
        $selectedDate = $request->input('selected_date');

        $cari = $request->input('cari');
        
        $namaKolom = $request->input('kolom');
        
        $all = $request->input('all');
        
        $date = Carbon::parse($selectedDate);

        $formattedDate = $date->isoFormat('dddd, D MMMM Y');

        /**
         * kondisi yang ditujukan untuk selected date dan search data
         */
        
        if (isset($selectedDate)) {
            
            $data = fids::whereDate('date', $selectedDate)->paginate();
        }
        elseif (isset($cari) && isset($namaKolom)) {
            
            $data = fids::where($namaKolom, 'like', "%$cari%")->latest()->paginate();

            Session::flash('cari', 'search was successful');

            return view('admin.report.fids', ['fids' => $data, 'date' => '']);
        }
        elseif (isset($all)) {
            
            $data = fids::whereDate('date', $today)->paginate(5);

            Session::forget('cari');
        }
        else {
            
            $data = fids::whereDate('date', $today)->paginate(5);
        }
        

        return view('admin.report.fids', ['fids' => $data, 'date' => $formattedDate]);
    }

    public function create() : View
    {
        $list = fidslist::all(['*']);

        return view('admin.report.fids.create', compact('list'));
    }

    public function store(Request $request) 
    {
        
        // Redirect jika tidak ada aksi yang cocok
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'monitor_name' => 'required',
            'monitor_view' => 'required',
            'view_desc' => 'required',
            'clean_condition' => 'required',
            'condition_desc' => 'required',
            'created_by',
            'updated_by',
        ]);


        // check if validator fail
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $data = new fids;

        $data::create($request->all()); 

        $monitor_name = $request->input('monitor_name');

        $successMessage = "Input {$monitor_name} success";

        $response =[
            'message' => $successMessage,
        ];

        return response()->json($response);
    }


    public function show(fids $fid) : View
    {
        
        $date = Carbon::parse($fid->date);

        $formattedDate = $date->isoFormat('D MMMM Y');
        $formattedDay = $date->isoFormat('dddd');

        return view('admin.report.fids.show', ['fid' => $fid, 'date' => $formattedDate, 'day' => $formattedDay]);
    }

    public function edit(fids $fid) : View
    {

        return view('admin.report.fids.edit', compact('fid'));
    }

    public function update(Request $request, fids $fid) : RedirectResponse
    {

        $request->validate([
            'monitor_name' => 'required',
            'monitor_view' => 'required',
            'view_desc' => 'required',
            'clean_condition' => 'required',
            'condition_desc' => 'required',
            'updated_by',
        ]);

        $fids = fids::findOrFail($fid->id);

        $fids->update($request->all(['monitor_name', 'monitor_view', 'view_desc', 'clean_condition', 'condition_desc', 'updated_by']));

        $name = $fids->monitor_name;

        return redirect()->route('fids.index')->with('success', "Berhasil merubah data $name");
    }

    public function destroy(fids $fid)
    {
        $fids = fids::findOrFail($fid->id);

        $name = $fid->monitor_name;

        $fids->delete();

        return redirect()->back()->with('success', "Berhasil menghapus data $name");
    }
}
