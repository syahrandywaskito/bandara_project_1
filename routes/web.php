<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CCTVController;
use App\Http\Controllers\CCTVListController;
use App\Http\Controllers\FIDSController;
use App\Http\Controllers\FIDSListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\KomputerListController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'Index'])->name('homepage');
// Route::view('/', 'homepage')->name('homepage');
Route::get('/berita{berita}', [HomeController::class, 'show'])->name('berita');

Route::get('/tool/cctv', function (){
  return view('tool.cctv');
});

Route::get('/tool/komputer', function (){
  return view('tool.komputer');
});

Route::get('/tool/fids', function (){
  return view('tool.fids');
});

Route::controller(AuthController::class)->group(function(){
  Route::get('/login', 'Login')->name('login');
  Route::get('/register', 'Register')->name('register');
  Route::get('/admin/dashboard', 'Dashboard')->name('dashboard');
  Route::post('/authenticate', 'Authenticate')->name('authenticate');
  Route::post('/store', 'Store')->name('store');
  Route::get('/logout', 'Logout')->name('logout');
});

# Route tool cctv report [ReportController]
Route::get('/tool/cctv', [ReportController::class, 'cctvIndex'])->name('tool.cctv.index');
Route::get('/tool/komputer', [ReportController::class, 'komputerIndex'])->name('tool.komputer.index');
Route::get('/tool/fids', [ReportController::class, 'fidsIndex'])->name('tool.fids.index');


# PDF data download
Route::get('/tool/report/cctv-report' , [ReportController::class, 'createPDFCCTV'])->name('report.cctv.download');
Route::get('/tool/report/komputer-report' , [ReportController::class, 'createPDFKomputer'])->name('report.komputer.download');
Route::get('/tool/report/fids-report' , [ReportController::class, 'createPDFFIDS'])->name('report.fids.download');

Route::resource('/dashboard/report/cctv', CCTVController::class);

Route::resource('/dashboard/users/users', UsersController::class);

Route::resource('/dashboard/report/fids', FIDSController::class);

Route::resource('/dashboard/report/komputer', KomputerController::class);

Route::resource('/dashboard/berita/beritas', BeritaController::class);

Route::resource('/dashboard/jadwal/jadwal', JadwalController::class);

Route::resource('/dasboard/hardware/list/cctv-list', CCTVListController::class)->names([
  'index' => 'list.cctv.index',
  'create' => 'list.cctv.create',
  'store' => 'list.cctv.store',
  'edit' => 'list.cctv.edit',
  'show' => 'list.cctv.show',
  'update' => 'list.cctv.update',
  'destroy' => 'list.cctv.destroy',
]);

Route::resource('/dashboard/hardware/list/fids-list', FIDSListController::class)->names([
  'index' => 'list.fids.index',
  'create' => 'list.fids.create',
  'store' => 'list.fids.store',
  'show' => 'list.fids.show',
  'edit' => 'list.fids.edit',
  'update' => 'list.fids.update',
  'destroy' => 'list.fids.destroy',
]);

Route::resource('/dashboard/hardware/list/komputer-list', KomputerListController::class)->names([
  'index' => 'list.komputer.index',
  'create' => 'list.komputer.create',
  'store' => 'list.komputer.store',
  'show' => 'list.komputer.show',
  'edit' => 'list.komputer.edit',
  'update' => 'list.komputer.update',
  'destroy' => 'list.komputer.destroy',
]);

# kontak dan seran route dalam admin
Route::controller(KontakController::class)->group(function(){
  # for admin page
  Route::get('/dashboard/kontak/index', 'indexAdmin')->name('kontak.admin.index');
  Route::get('/dashboard/kontak/edit_kontak/{kontak}/edit', 'editKontak')->name('kontak.admin.edit');
  Route::put('/dashboard/kontak/update_kontak/{kontak}', 'updateKontak')->name('kontak.admin.update');
  Route::get('/dashboard/kontak/lihat_saran/{saran}', 'showSaran')->name('saran.admin.show');
  Route::delete('/dashboard/kontak/hapus_saran/{saran}', 'destroySaran')->name('saran.admin.destroy');

  # for public page
  Route::get('/hubungi_kami', 'indexUser')->name('kontak.user.index');
  Route::post('/hubungi_kami/saran', 'storeSaran')->name('saran.user.store');
});