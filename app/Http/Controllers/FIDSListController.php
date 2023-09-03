<?php

namespace App\Http\Controllers;

use App\Models\fidslist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

        fidslist::create($request->all());

        return redirect()->back()->with('success', 'Anda berhasil menambah data');
    }

    public function destroy(fidslist $fids_list)
    {
        $fids_list->delete();

        return redirect()->back()->with('success', 'Anda berhasil menghapus data');
    }
}
