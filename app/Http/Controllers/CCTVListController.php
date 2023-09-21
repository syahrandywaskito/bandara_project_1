<?php

namespace App\Http\Controllers;

use App\Models\CCTVList;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CCTVListController extends Controller
{
    public function index(Request $request) : View
    {
        $cari = $request->cari;

        $namaKolom = $request->kolom;

        $all = $request->all;

        if (isset($cari) && isset($namaKolom)) {
            
            $list = CCTVList::where($namaKolom, 'like', "%$cari%")->get();
        }

        elseif (isset($all)) {
            
            $list = CCTVList::all(['*']);
        }

        else{

            $list = CCTVList::all(['*']);
        }

        return view('admin.hardware.cctv_list.index', ['list' => $list]);
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $name = $request->input('name');

        CCTVList::create($request->all());

        $successMessage = "Berhasil menambah data $name";

        return redirect()->back()->with('success', $successMessage);
    }

    public function edit(CCTVList $cctv_list)
    {

        return view('admin.hardware.cctv_list.edit', compact('cctv_list'));
    }

    public function update(Request $request, CCTVList $cctv_list)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $oldName = $cctv_list->name;

        $cctv_list->update([
            'name' => $request->name,
        ]);

        $newName = $cctv_list->name;

        $successMessage = "Berhasil merubah data dari $oldName menjadi $newName";

        return redirect()->route('list.cctv.index')->with('success', $successMessage);
    }

    public function destroy(CCTVList $cctv_list)
    {
        $name = $cctv_list->name;

        $cctv_list->delete();

        $successMessage = "Berhasil menghapus data $name";

        return redirect()->back()->with('success', $successMessage);
    }
}
