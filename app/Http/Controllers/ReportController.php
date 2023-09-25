<?php

namespace App\Http\Controllers;

use App\Models\CctvModel;
use App\Models\fids;
use App\Models\Komputer;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function cctvIndex() : View
    {
      return view('tool.cctv');
    }
    public function komputerIndex() : View
    {
      return view('tool.komputer');
    }
    public function fidsIndex() : View
    {
      return view('tool.fids');
    }

    public function index() : View  
    {

      $today = now()->format('Y-m-d');

      // cureent date for cctv report table
      $cctvDate = CctvModel::whereDate('date', $today)->get();
      $fidsDate = fids::whereDate('date', $today)->get();
      $komputerDate = Komputer::whereDate('date', $today)->get();

      return view('tool.report', ['cctv' => $cctvDate, 'fids' => $fidsDate, 'komputer' => $komputerDate]);
    }

    public function createPDFCCTV(Request $request)
    {
      $inputBulan = $request->bulan;

      $parse = Carbon::parse($inputBulan);

      $bulan = $parse->format('m');

      $cctvMonth = CctvModel::orderBy('date', 'asc')->whereMonth('date', $bulan)->get();

      return view('tool.report-download.pdf-cctv', ['cctv' => $cctvMonth]);

    }
    public function createPDFKomputer()
    {
      
      $month = now()->format('m');
      $komputerMonth = Komputer::orderBy('date', 'asc')->whereMonth('date', $month)->get();

      return view('tool.report-download.pdf-komputer', ['komputer' => $komputerMonth]);

    }
    public function createPDFFIDS()
    {
      $month = now()->format('m');
      $fidsDate = fids::orderBy('date', 'asc')->whereMonth('date', $month)->get();

      return view('tool.report-download.pdf-fids', ['fids' => $fidsDate]);
    }
}
