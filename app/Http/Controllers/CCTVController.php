<?php

namespace App\Http\Controllers;

use App\Models\CCTVList;
use App\Models\CctvModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CCTVController extends Controller
{
    public function index() : View
    {
        $cctvs = CctvModel::all();
        return view('admin.report.cctv', compact('cctvs'));
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

        $list = CCTVList::all();

        return view('admin.report.cctv.create', compact('list'));
    }

    /**
     * Show selected data
     * 
     * @return View
     */

    public function show(CctvModel $cctv) : View
    {
        return view('admin.report.cctv.show', compact('cctv'));
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
        ]);

        $cctv = CctvModel::findOrFail($id);
        
        $cctv->update($request->all());

        return redirect()->route('cctv.index')->withSuccess('You successfully edit data');
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
