<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Saran;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class KontakController extends Controller
{

    public function indexUser() : View
    {
        $kontak = Kontak::all();

        $data = $kontak->first();

        return view('kontak', ['kontak' => $data]);
    }

    public function indexAdmin() : View
    {
        $saran = Saran::latest()->get();

        $kontak = Kontak::all();

        return view('admin.kontak.index', ['saran' => $saran, 'kontak' => $kontak->first()]);
    }


    /**
     * 
     * Insert saran melalui input di halaman Hubungi Kami
     * 
     */

    public function storeSaran(Request $request) : RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required|min:5',
            'pesan' => 'required|min:10'
        ]);

        Saran::create($request->all());

        return redirect()->back()->with('success', 'Terima Kasih Atas Saran Anda');
    }

    /**
     * 
     * Lihat Saran di halaman lain
     * 
     */

    public function showSaran(Saran $saran) : View
    {
        return view('admin.kontak.show', ['saran' => $saran]);
    }

    /**
     * 
     * Halamn untuk mengedit kontak berupa no tlp dan alamat email
     */

    public function editKontak(Kontak $kontak) : View
    {

        return view('admin.kontak.edit', ['kontak' => $kontak]);
    }

    /**
     * 
     * Tambah kontak jika belum ada
     * 
     */

    public function createKontak() : View
    {
        return view('admin.kontak.edit');
    }

    /**
     *  masukan data create kontak ke database
     * 
     */

    public function storeKontak(Request $request) : RedirectResponse
    {
        $request->validate([
            'email_admin',
            'no_tlp'
        ]);

        Kontak::create($request->all());

        return redirect()->route('kontak.admin.index')->with('success', 'Berhasil menambah data kontak');
    } 

    /**
     * 
     * Update email & No TLP
     * 
     */

    public function updateKontak (Request $request, Kontak $kontak) : RedirectResponse
    {
        $request->validate([
            'email_admin',
            'no_tlp'
        ]);

        $kontak->update($request->all());

        return redirect()->route('kontak.admin.index')->with('success', 'Berhasil merubah kontak');
    }

    /**
     * 
     * Hapus saran yang sudah tidak perlu
     * 
     */

    public function destroySaran(Saran $saran) : RedirectResponse
    {
        $saran->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus saran');
    }

}
