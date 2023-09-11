<?php

namespace App\Http\Controllers;

use App\Models\CctvModel;
use App\Models\fids;
use App\Models\Komputer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() : View  
    {

      $today = now()->format('Y-m-d');

      // cureent date for cctv report table
      $cctvDate = CctvModel::whereDate('date', $today)->get();
      $fidsDate = fids::whereDate('date', $today)->get();
      $komputerDate = Komputer::whereDate('date', $today)->get();

      return view('tool.report', ['cctv' => $cctvDate, 'fids' => $fidsDate, 'komputer' => $komputerDate]);
    }

    public function createPDFCCTV()
    {
      $today = now()->format('Y-m-d');
      $cctvDate = CctvModel::whereDate('date', $today)->get();

      return view('tool.report-download.pdf-cctv', ['cctv' => $cctvDate]);

    }
    public function createPDFKomputer()
    {
      $today = now()->format('Y-m-d');
      $komputerDate = Komputer::whereDate('date', $today)->get();

      return view('tool.report-download.pdf-komputer', ['komputer' => $komputerDate]);

    }
    public function createPDFFIDS()
    {
      $today = now()->format('Y-m-d');
      $fidsDate = fids::whereDate('date', $today)->get();

      return view('tool.report-download.pdf-fids', ['fids' => $fidsDate]);
    }
}
