<?php

namespace App\Http\Controllers;

use App\Models\CCTVList;
use App\Models\CctvModel;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CCTVController extends Controller
{
    public function index(Request $request) : View
    {
        $cctvs = CctvModel::all(['*']);

        $today = now()->format('Y-m-d');

        $selectedDate = $request->input('selected_date');

        
        if (isset($selectedDate)) {
            
            $data = CctvModel::whereDate('date', $selectedDate)->get();
        }
        else {
            
            $data = CctvModel::whereDate('date', $today)->get();
        }
        
        $date = Carbon::parse($selectedDate);
        $formattedDate = $date->format('d M Y');
        $formattedday = $date->format('l');

        return view('admin.report.cctv', ['cctvs' => $data, 'date' => $formattedDate, 'day' => $formattedday]);
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

        $successMessage = "Input {$hardware_name} success";

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
    
    public function create() : View
    {

        $list = CCTVList::all(['*']);

        return view('admin.report.cctv.create', compact('list'));
    }

    /**
     * Show selected data
     * 
     * @return View
     */

    public function show(CctvModel $cctv) : View
    {
        $date = Carbon::parse($cctv->date);

        $formattedDate = $date->format('d M Y');
        $formattedDay = $date->format('l');

        return view('admin.report.cctv.show', ['cctv' => $cctv, 'date' => $formattedDate, 'day' => $formattedDay]);
    }

    /**
     * Edit selected data
     * 
     * @return View
     */

    public function edit(CctvModel $cctv) : View
    {
        return view('admin.report.cctv.edit', compact('cctv'));
    }

    /**
     * Update data to database table
     * 
     * @return RedirectResponse
     *
     */

    public function update(Request $request, $id) : RedirectResponse
    {

        $request->validate([
            'hardware_name' => 'required',
            'record_status' => 'required',
            'record_desc' => 'required',
            'clean_status' => 'required',
            'clean_desc' => 'required',
            'updated_by',
        ]);

        $cctv = CctvModel::findOrFail($id);
        
        $cctv->update($request->all(['hardware_name', 'record_status', 'record_desc', 'clean_status', 'clean_desc', 'updated_by']));

        return redirect()->route('cctv.index')->with('success', 'Anda berhasil mengupdate data');
    }

    /**
     * Delete data in database table
     * 
     * @return RedirectResponse
     */

    public function destroy(CctvModel $cctv) : RedirectResponse
    {

        $cctv->delete();

        return redirect()->route('cctv.index')->withSuccess('You successfully deleted data');
    }
}
