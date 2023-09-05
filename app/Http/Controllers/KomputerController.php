<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use App\Models\KomputerList;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KomputerController extends Controller
{
    public function index(Request $request) : View
    {
        $komputer = Komputer::all(['*']);

        $today = now()->format('d M Y');

        $selectedDate = $request->input('selected_date');

        if (isset($selectedDate)) {
            
            $data = Komputer::whereDate('date', $selectedDate)->get();
        }
        else {

            $data = Komputer::whereDate('date', $today)->get();
        }

        $date = Carbon::parse($selectedDate);
        $formattedDay = $date->format('l');
        $formatteedDate = $date->format('d M Y');


        return view('admin.report.komputer', ['komputer' => $data, 'day' => $formattedDay, 'date' => $formatteedDate]);
    }

    public function create() : View
    {

        $list = KomputerList::all(['*']);

        return view('admin.report.komputer.create', compact('list'));
    }

    public function store(Request $request)
    {
         // Redirect jika tidak ada aksi yang cocok
         $validator = Validator::make($request->all(), [
            'date' => 'required',
            'computer_name' => 'required',
            'on_off_condition' => 'required',
            'on_off_desc' => 'required',
            'uninstalled_app' => 'required',
            'uninstalled_app_desc' => 'required',
            'clean_file_status' => 'required',
            'clean_file_desc' => 'required',
            'created_by',
            'updated_by',

        ]);


        // check if validator fail
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $data = new Komputer;

        $data::create($request->all()); 

        $hardware_name = $request->input('computer_name');

        $successMessage = "Input {$hardware_name} success";

        $response =[
            'message' => $successMessage,
        ];

        return response()->json($response);
    }

    public function edit(Komputer $komputer) : View
    {
        return view('admin.report.komputer.edit', compact('komputer'));
    }

    public function update(Request $request, $id) : RedirectResponse
    {   

        $request->validate([
            'computer_name' => 'required',
            'on_off_condition' => 'required',
            'on_off_desc' => 'required',
            'uninstalled_app' => 'required',
            'uninstalled_app_desc' => 'required',
            'clean_file_status' => 'required',
            'clean_file_desc' => 'required',
            'updated_by',
        ]);

        $komuter = Komputer::findOrFail($id);

        $komuter->update($request->all([
            'computer_name',
            'on_off_condition',
            'on_off_desc',
            'uninstalled_app',
            'uninstalled_app_desc',
            'clean_file_status',
            'clean_file_desc',
            'updated_by',
        ]));

        return redirect()->route('komputer.index')->with('success', 'Anda berhasil mengupdate data');
    }

    public function show(Komputer $komputer) : View
    {
        return view('admin.report.komputer.show');
    }

    public function destroy(Komputer $komputer) : RedirectResponse
    {
        $komputer->delete();

        return redirect()->route('komputer.index')->with('success', 'Anda berhasil menghapus data');
    }

}
