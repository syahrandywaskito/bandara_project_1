<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
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
    

}
