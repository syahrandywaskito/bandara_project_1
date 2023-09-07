<?php

namespace App\Http\Controllers;

use App\Models\fidslist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FIDSListController extends Controller
{
    public function index() : View
    {
        $list = fidslist::all(['*']);

        return view('admin.hardware.fids_list.index', compact('list'));
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $name = $request->input('name');

        fidslist::create($request->all());

        $successMessage = "Berhasil menambah data $name";

        return redirect()->back()->with('success', $successMessage);
    }

    public function edit(fidslist $fids_list)
    {

        return view('admin.hardware.fids_list.edit', compact('fids_list'));
    }

    public function update(Request $request, fidslist $fids_list)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $oldName = $fids_list->name;

        $fids_list->update([
            'name' => $request->name,
        ]);

        $newName = $fids_list->name;

        $successMessage = "Berhasil merubah data dari $oldName menjadi $newName";

        return redirect()->route('list.fids.index')->with('success', $successMessage);
    }

    public function destroy(fidslist $fids_list)
    {
        $name = $fids_list->name;

        $fids_list->delete();

        $successMessage = "Berhasil menghapus data $name";

        return redirect()->back()->with('success', $successMessage);
    }
}
