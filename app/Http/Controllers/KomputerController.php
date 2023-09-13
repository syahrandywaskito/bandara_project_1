<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use App\Models\KomputerList;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class KomputerController extends Controller
{
    public function index(Request $request) : View
    {

        /**
         * Semua variabel dari input yang dilakukan pada form di halaman index
         */

        $today = now()->format('Y-m-d');

        $cari = $request->input('cari');

        $namaKolom = $request->input('kolom');

        $all = $request->input('all');

        $selectedDate = $request->input('selected_date');

        $date = Carbon::parse($selectedDate);

        $formattedDate = $date->isoFormat('dddd, D MMMM Y');

        /**
         * Kondisi untuk selected date dan search
         */

        if (isset($selectedDate)) {
            
            $data = Komputer::whereDate('date', $selectedDate)->paginate(5);

        }
        elseif (isset($cari) && isset($namaKolom)){
            
            $data = Komputer::Where($namaKolom, 'like', "%$cari%")->latest()->paginate();

            Session::flash('cari', 'Search was successful.');

            return view('admin.report.komputer', ['komputer' => $data, 'date' => '']);
        }
        elseif (isset($all)) {

            $data = Komputer::whereDate('date', $today)->paginate(5);

            Session::forget('cari');   
        }
        else {

            $data = Komputer::whereDate('date', $today)->paginate(5);
        }

        return view('admin.report.komputer', ['komputer' => $data, 'date' => $formattedDate]);
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
            'uninstalled_app',
            'uninstalled_app_desc',
            'clean_file_status' => 'required',
            'clean_file_desc',
            'created_by',
            'updated_by',

        ]);


        // check if validator fail
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $data = new Komputer;

        $data::create($request->all()); 

        $computer_name = $request->input('computer_name');

        $successMessage = "Input {$computer_name} success";

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

        $komputer = Komputer::findOrFail($id);

        $komputer->update($request->all([
            'computer_name',
            'on_off_condition',
            'on_off_desc',
            'uninstalled_app',
            'uninstalled_app_desc',
            'clean_file_status',
            'clean_file_desc',
            'updated_by',
        ]));

        return redirect()->route('komputer.index')->with('success', 'Anda berhasil merubah data');
    }

    public function show(Komputer $komputer) : View
    {
        $date = Carbon::parse($komputer->date);

        $formattedDate = $date->isoFormat('D MMMM Y');
        $formattedDay = $date->isoFormat('dddd');

        return view('admin.report.komputer.show', ['komputer' => $komputer, 'day' => $formattedDay, 'date' => $formattedDate]);
    }

    public function destroy(Komputer $komputer) : RedirectResponse
    {
        $komputer->delete();

        return redirect()->route('komputer.index')->with('success', 'Anda berhasil menghapus data');
    }

}
