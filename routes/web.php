<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CCTVController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;

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

Route::controller(ReportController::class)->group(function(){
  Route::get('/dashboard/report/komputer', 'komputer')->name('komputer');
  Route::get('/dashboard/report/fids', 'fids')->name('fids');
});

Route::resource('/dashboard/report/cctv', CCTVController::class);