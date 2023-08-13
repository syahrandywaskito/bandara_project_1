<?php

namespace App\Http\Controllers;

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
        return view('homepage', [
            'message' => 'Homepage for Airport'
        ]);

    }

}
