<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CCTVController;
use App\Http\Controllers\CCTVListController;
use App\Http\Controllers\FIDSController;
use App\Http\Controllers\FIDSListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KomputerController;
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
Route::view('/', 'homepage')->name('homepage');

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

Route::get('/tool/report', [ReportController::class, 'index'])->name('report.index');

Route::resource('/dashboard/report/cctv', CCTVController::class);

Route::resource('/dashboard/users/users', UsersController::class);

Route::resource('/dashboard/report/fids', FIDSController::class);

Route::resource('/dashboard/report/komputer', KomputerController::class);

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
