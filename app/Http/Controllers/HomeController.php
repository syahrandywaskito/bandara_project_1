<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Jadwal;
use illuminate\Contracts\Foundation\Application;
use illuminate\Contracts\View\Factory;
use illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @description Hompage website
     * 
     * @param Request $request
     * 
     * @return Factory|View|Application
     */

    public function Index(Request $request) : Factory|View|Application
    {
        # data jadwal penerbangan keberangkatan 
        $keberangkatan = Jadwal::where('jenis_penerbangan', 'keberangkatan')->orderBy('jam', 'asc')->get();

        # data jadwal penerbangan kedatangan
        $kedatangan = Jadwal::where('jenis_penerbangan', 'kedatangan')->orderBy('jam', 'asc')->get();

        # data berita dari model Berita
        $berita = Berita::latest()->limit(1)->get();
        // $berita = Berita::latest()->first()->get();

        # data berita yang dipaginate
        // $paginate = Berita::latest()->paginate(3);
        $paginate = Berita::latest()->limit(1)->get();
        $paginate2 = Berita::latest()->limit(4)->offset(1)->get();


        return view('homepage', [
            'berita' => $berita,
            'beritaPaginate' => $paginate,
            'beritaPaginate2' => $paginate2,
            'keberangkatan' => $keberangkatan,
            'kedatangan' => $kedatangan,
            'message' => 'Homepage for Airport',
        ]);

    }

    public function show(Berita $berita) : View
    {
        return view('berita', compact('berita'));
    }

}
