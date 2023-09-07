<?php

namespace App\Http\Controllers;

use App\Models\fids;
use App\Models\fidslist;
use App\Models\KomputerList;
use Illuminate\Cache\RedisTagSet;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KomputerListController extends Controller
{
    public function index() : View
    {
        $list = KomputerList::all(['*']);

        return view('admin.hardware.komputer_list.index', compact('list'));
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required'
        ]);

        $name = $request->input('name');

        KomputerList::create($request->all());

        $successMessage = "Berhasil menambah data $name";

        return redirect()->back()->with('success', $successMessage);
    }

    public function edit(KomputerList $komputer_list)
    {
        return view('admin.hardware.komputer_list.edit', compact('komputer_list'));
    }

    public function update(Request $request, KomputerList $komputer_list)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $oldName = $komputer_list->name;

        $komputer_list->update($request->all());

        $newName = $komputer_list->name;

        $successMessage = "Anda berhasil merubah data $oldName menjadi $newName";

        return redirect()->route('list.komputer.index')->with('success', $successMessage);
    }

    public function destroy(KomputerList $komputer_list) : RedirectResponse
    {
        $name = $komputer_list->name;

        $komputer_list->delete();

        $successMessage = "Berhasil menghapus data $name";

        return redirect()->back()->with('success', $successMessage);
    }
}
