<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    public function index(Request $request) : View
    {   
        $cari = $request->cari;

        $namaKolom = $request->kolom;

        $all = $request->all;

        if (isset($cari) && isset($namaKolom)) {
            
            $all = Jadwal::where($namaKolom, 'like' , "%$cari%")->get();

            Session::flash('cari', 'successfull search');

            return view('admin.jadwal.index', ['all' => $all, 'jadwal_keberangkatan', 'jadwal_kedatangan']);

        }
        elseif (isset($all)) {
            
            $keberangkatan = Jadwal::where('jenis_penerbangan', 'keberangkatan')->orderBy('jam', 'asc')->get();

            $kedatangan = Jadwal::where('jenis_penerbangan', 'kedatangan')->orderBy('jam', 'asc')->get();

            Session::forget('cari');
        }
        else{

            $keberangkatan = Jadwal::where('jenis_penerbangan', 'keberangkatan')->orderBy('jam', 'asc')->get();

            $kedatangan = Jadwal::where('jenis_penerbangan', 'kedatangan')->orderBy('jam', 'asc')->get();
        }

       

        return view('admin.jadwal.index', ['jadwal_keberangkatan' => $keberangkatan, 'jadwal_kedatangan' => $kedatangan, 'all']);
    }

    public function create() : View
    {
        return view('admin.jadwal.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'logo_maskapai' => 'required|image|mimes:jpeg,jpg,png|',
            'maskapai' => 'required',
            'jenis_penerbangan' => 'required',
            'id_penerbangan' => 'required',
            'tujuan' => 'required',
            'jam' => 'required'
        ],
        [
            'logo_maskapai.mimes' => 'Gambar harus berformat jpeg, png, jpg',
            'logo_maskapai.image' => 'File harus bertipe image atau gambar',
        ]
        );

        $nama_maskapai = $request->maskapai;

        $logoMaskapai = $request->file('logo_maskapai');
        $logoMaskapai->storeAs('public/logo/', $logoMaskapai->hashName());

        Jadwal::create([
            'logo_maskapai' => $logoMaskapai->hashName(),
            'maskapai' => $request->maskapai,
            'jenis_penerbangan' => $request->jenis_penerbangan, 
            'id_penerbangan' => $request->id_penerbangan,
            'tujuan' => $request->tujuan,
            'jam' => $request->jam,
        ]); 

        return redirect()->route('jadwal.index')->with('success', "berhasil menambah jadwal untuk maskapai $nama_maskapai");
    }

    public function edit(Jadwal $jadwal) : View
    {
        return view('admin.jadwal.edit', ['jadwal' => $jadwal]);
    }

    public function update(Request $request, Jadwal $jadwal) : RedirectResponse
    {
        $request->validate([
            'logo_maskapai' => 'image|mimes:jpeg,jpg,png',
            'maskapai' => 'required',
            'jenis_penerbangan' => 'required',
            'id_penerbangan' => 'required',
            'tujuan' => 'required',
            'jam' => 'required',
        ],
        [
            'logo_maskapai.mimes' => 'Gambar harus berformat jpeg, png, jpg',
            'logo_maskapai.image' => 'File harus bertipe image atau gambar',
        ]
        );

        if ($request->hasFile('logo_maskapai')) {
            
            $logoMaskapai = $request->file('logo_maskapai');
            $logoMaskapai->storeAs('public/logo/'.$logoMaskapai->hashName());

            Storage::delete('public/logo/'.$jadwal->logo_maskapai);

            $jadwal->update([
                'logo_maskapai' => $logoMaskapai->hashName(),
                'maskapai' => $request->maskapai,
                'jenis_penerbangan' => $request->jenis_penerbangan,
                'id_penerbangan' => $request->id_penerbangan,
                'tujuan' => $request->tujuan,
                'jam' => $request->jam,
            ]);
        }
        else {

            $jadwal->update([
                'maskapai' => $request->maskapai,
                'jenis_penerbangan' => $request->jenis_penerbangan,
                'id_penerbangan' => $request->id_penerbangan,
                'tujuan' => $request->tujuan,
                'jam' => $request->jam,
            ]);
        }

        $nama_maskapai = $jadwal->maskapai;

        return redirect()->route('jadwal.index')->with('success', "success merubah jadwal maskapai $nama_maskapai");
    }

    public function destroy(Jadwal $jadwal) : RedirectResponse
    {
        $nama_maskapai = $jadwal->maskapai;

        Storage::delete('public/logo/'.$jadwal->logo_maskapai);

        $jadwal->delete();

        return redirect()->back()->with('success', "berhasil menghapus jadwal maskapai $nama_maskapai");
    }
}
