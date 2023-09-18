<?php

namespace App\Http\Controllers;

use App\Models\Berita;
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

        # data berita dari model Berita
        $berita = Berita::latest()->get();

        # data berita yang dipaginate
        $paginate = Berita::latest()->paginate(2);

        return view('homepage', [
            'berita' => $berita,
            'beritaPaginate' => $paginate,
            'message' => 'Homepage for Airport',
        ]);

    }

}
