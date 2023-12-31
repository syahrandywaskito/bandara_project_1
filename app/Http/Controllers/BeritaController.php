<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{

    /**
     *  * Melihat Halaman index
     *  * Search akan direturn ke index
     * 
     *  @param Request $request
     *  @return View
     */
    public function index(Request $request) : View
    {
        $namaKolom = $request->kolom;

        $cari = $request->cari;

        $all = $request->all;

        if (isset($cari) && isset($namaKolom)) {
            
            $data = DB::table('beritas')->where($namaKolom, 'like', "%$cari%")->latest()->get();
        }
        elseif (isset($all)) {

            $data = Berita::latest()->get();
        }
        else {
            
            $data = Berita::latest()->get();
        }


        return view('admin.berita.index', ['berita' => $data]);
    }

    /**
     *  * View halaman tambah berita
     * 
     * @return View
     */

    public function create() : View
    {
        return view('admin.berita.create');
    }

    /**
     *  * Memasukkan hasil input berita ke dalam database
     * 
     *  @param Request $request
     *  @return RedirectResponse
     */

    public function store(Request $request)
    {
        # validate data
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'judul' => 'required|min:5',
            'isi' => 'required|min:10',
        ],
        [
            'gambar.image' => 'File harus bertipe image atau gambar',
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, atau png',
            'judul.min' => 'Judul harus memiliki minimal 5 huruf',
            'isi.min' => 'Isi harus memiliki minimal 10 huruf',
        ]
        );
        

        # masukkan gambar ke public/berita/ dalam bentuk hash
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/berita/', $gambar->hashName());
        
        # buat data menggunakan method create pada Model Berita
        Berita::create([
            'gambar' =>  $gambar->hashName(),
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        
        # variabel untuk success message
        $judul = $request->judul;
        $successMessage = "Berhasil menambah berita $judul";

        return redirect()->route('beritas.index')->with('success', $successMessage);
    }

    /**
     *  * View halaman edit berita
     *  
     *  @param Berita $berita 
     *  @return View
     */

    public function edit(Berita $berita) : View
    {

        return view('admin.berita.edit', ['berita' => $berita]);
    }

    /**
     *  * Update berita di database dengan data yang baru
     *  
     *  @param Request $request
     *  @param Berita $berita
     *  @return RedirectResponse
     */

    public function update(Request $request, Berita $berita) : RedirectResponse
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,jpg,png',
            'judul' => 'required|min:5',
            'isi' => 'required|min:10',
        ],
        [
            'gambar.image' => 'File harus bertipe image atau gambar',
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, atau png',
            'judul.min' => 'Judul harus memiliki minimal 5 huruf',
            'isi.min' => 'Isi harus memiliki minimal 10 huruf',
        ]
        );

        $judul = $berita->judul;

        if($request->hasFile('gambar')){

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/berita/', $gambar->hashName());

            Storage::delete('public/berita/'.$berita->gambar);

            $berita->update([
                'gambar' => $gambar->hashName(),
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);
        }
        else {
            
            $berita->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);
        }

        return redirect()->route('beritas.index')->with('success', "Berhasil merubah berita $judul");
    }

    /**
     *  * Menampilkan berita secara lengkap
     *  
     *  @param Berita $berita
     *  @return View 
     */

    public function show(Berita $berita) : View
    {
        return view('admin.berita.show', ['berita' => $berita]);
    }

    /**
     *  * Menghapus data berita beserta gambar pada /public/berita/
     * 
     *  @param Berita $berita
     *  @return RedirectResponse
     */

    public function destroy(Berita $berita) : RedirectResponse
    {
        $judul = $berita->judul;

        Storage::delete('public/berita/'.$berita->gambar);

        $berita->delete();

        return redirect()->back()->with('success', "Berhasil menghapus berita $judul");
    }
}
