<?php

namespace App\Http\Controllers;

use App\Models\CCTVList;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CCTVListController extends Controller
{
    public function index() : View
    {
        $list = CCTVList::all(['*']);

        return view('admin.hardware.cctv_list.index', compact('list'));
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        CCTVList::create($request->all());

        return redirect()->back()->with('success', 'Anda Berhasil Menambah Data');
    }

    public function destroy(CCTVList $cctv_list)
    {
        $cctv_list->delete();

        return redirect()->back()->with('success', 'Anda Berhasil Menghapus Data');
    }
}
