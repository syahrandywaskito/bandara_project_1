<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{

    /**
     * Berita view index
     * 
     * @return View
     */
    public function index() : View
    {
        $berita = Berita::latest()->get(4);

        return view('admin.berita.index', ['berita' => $berita]);
    }

    /**
     * Halaman untuk memasukkan data berita
     * 
     * @return View
     */

    public function create() : View
    {
        return view('admin.berita.create');
    }

    /**
     * Memasukkan data ke dalam database 
     * 
     * @return RedirectResponse
     */

    public function store(Request $request)
    {
        # validate data
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'judul' => 'required|min:5',
            'isi' => 'required|min:10',
        ]);
        

        # masukkan gambar ke public/berita dalam bentuk hash
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/berita', $gambar->hashName());
        
        # buat data menggunakan method create pada Model Berita
        Berita::create([
            'gambar' =>  $gambar->hashName(),
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        
        # variabel untuk success message
        $judul = $request->judul;
        $successMessage = "Berhasil menambah berita '$judul'";

        return redirect()->route('beritas.index')->with('success', $successMessage);
    }

    

}
