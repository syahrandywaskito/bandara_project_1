<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class reportController extends Controller
{
    // cctv controller
    // public function cctv () : View
    // {
    //     return view('admin.report.cctv');
    // }

    public function komputer() : View
    {
        return view('admin.report.komputer');
    }

    public function fids() : View
    {
        return view('admin.report.fids');
    }
}
