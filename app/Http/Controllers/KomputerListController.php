<?php

namespace App\Http\Controllers;

use App\Models\KomputerList;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

        KomputerList::create($request->all());

        return redirect()->back()->with('success', 'Anda berhasil menambah data');
    }

    public function destroy(KomputerList $komputer_list) : RedirectResponse
    {
        $komputer_list->delete();

        return redirect()->back()->with('success', 'Anda berhasil menghapus data');
    }
}
