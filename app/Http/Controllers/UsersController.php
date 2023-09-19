<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request) : View
    {
        $cari = $request->cari;

        $namaKolom = $request->kolom;

        $all = $request->all;

        if (isset($cari) && isset($namaKolom)) {
            
            $data = User::where($namaKolom, 'like', "%$cari%")->get();

        } 
        elseif (isset($all)) {
            
            $data = User::all();
        }
        else {
            
            $data = User::all();
        }
        
        return view('admin.users.users', ['users' => $data]);
    }

    /**
     * Delete pengguna dari database
     * 
     * @return RedirectResponse
     */
    
    public function destroy(User $user) : RedirectResponse
    {
        $nama = $user->name;

        $user->delete();

        return redirect()->back()->with('success', "Berhasil menghapus pengguna $nama");
    }

}
