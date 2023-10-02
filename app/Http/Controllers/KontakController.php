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

        $email = $kontak->pluck('email_admin');

        $noTlp = $kontak->pluck('no_tlp');

        return view('kontak', ['email' => $email, 'noTlp' => $noTlp ]);
    }

    public function indexAdmin() : View
    {
        $saran = Saran::latest()->get();
        $kontak = Kontak::all();

        return view('admin.kontak.index', ['saran' => $saran, 'kontak' => $kontak]);
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
     * Halamn untuk mengedit kontak berupa no tlp dan alamat email
     */

    public function editKontak() : View
    {
        $kontak = Kontak::all();

        return view('admin.kontak.edit', ['kontak' => $kontak]);
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

        $kontak->update([
            'email_admin',
            'no_tlp'
        ]);

        return redirect()->back()->with('success', 'Berhasil merubah email');
    }

}
