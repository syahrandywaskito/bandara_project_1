<?php

namespace App\Http\Controllers;

use App\Models\CctvModel;
use App\Models\fids;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function index() : View  
    {

      $cctv = CctvModel::all();
      $fids = fids::all();

      $today = now()->format('Y-m-d');

      // cureent date for cctv report table
      $cctvDate = CctvModel::whereDate('date', $today)->get();
      $fidsDate = fids::whereDate('date', $today)->get();
      

      return view('tool.report', ['cctv' => $cctvDate, 'fids' => $fidsDate]);
    }
}
