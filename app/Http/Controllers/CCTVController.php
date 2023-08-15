<?php

namespace App\Http\Controllers;

use App\Models\CctvModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    
    public function store(Request $request) : RedirectResponse
    {

        
        // Redirect jika tidak ada aksi yang cocok
        
        $request->validate([
            'date' => 'required',
            'hardware_name' => 'required',
            'record_status' => 'required',
            'record_desc' => 'required',
            'clean_status' => 'required',
            'clean_desc' => 'required',
        ]);
        
        CctvModel::create($request->all());
        
        $hardware_name = $request->input('hardware_name');

        $successMessage = "Input {$hardware_name} success";

        session(['formSubmitted' => true]);

        return redirect()->back()->with('success', $successMessage);
    }

    /**
     * Create page to add data
     * 
     * @return View
     */
    
    public function create() : View
    {
        return view('admin.report.cctv.create');
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
