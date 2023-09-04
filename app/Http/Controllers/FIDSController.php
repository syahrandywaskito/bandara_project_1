<?php

namespace App\Http\Controllers;

use App\Models\fids;
use App\Models\fidslist;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FIDSController extends Controller
{
    public function index(Request $request) : View
    {

        $fidss = fids::all(['*']);

        $today = now()->format('Y-m-d');

        $selectedDate = $request->input('selected_date');

        
        if (isset($selectedDate)) {
            
            $data = fids::whereDate('date', $selectedDate)->get();
        }
        else {
            
            $data = fids::whereDate('date', $today)->get();
        }
        
        $date = Carbon::parse($selectedDate);
        $formattedDate = $date->format('d M Y');
        $formattedday = $date->format('l');

        return view('admin.report.fids', ['fids' => $data, 'date' => $formattedDate, 'day' => $formattedday]);
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

        $formattedDate = $date->format('d M Y');
        $formattedDay = $date->format('l');

        return view('admin.report.fids.show', ['fid' => $fid, 'date' => $formattedDate, 'day' => $formattedDay]);
    }

    public function edit(fids $fid) : View
    {

        return view('admin.report.fids.edit', compact('fid'));
    }

    public function update(Request $request, $id) : RedirectResponse
    {

        $request->validate([
            'monitor_name' => 'required',
            'monitor_view' => 'required',
            'view_desc' => 'required',
            'clean_condition' => 'required',
            'condition_desc' => 'required',
            'updated_by',
        ]);

        $fids = fids::findOrFail($id);

        $fids->update($request->all(['monitor_name', 'monitor_view', 'view_desc', 'clean_condition', 'condition_desc', 'updated_by']));

        return redirect()->route('fids.index')->with('success', 'you successfuly updated data');
    }

    public function destroy($id)
    {
        $fids = fids::findOrFail($id);

        $fids->delete();

        return redirect()->back()->with('success', 'you successfully delete data');
    }
}
