<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\KontrolController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login
Route::get('/', [LoginController::class,'index'])->middleware('guest');
Route::post('login', [LoginController::class,'authenticate']);
Route::post('logout', [LoginController::class,'logout']);

//daftar
Route::get('daftar', [DaftarController::class,'index'])->middleware('guest');
Route::post('daftar', [DaftarController::class,'store']);

//dashboard
Route::get('dashboard', [DashboardController::class,'index'])->middleware('auth');
Route::get('dashboardberat', [DashboardController::class,'readberat']);
//monitoring
Route::get('monitoring', [MonitoringController::class,'index'])->middleware('auth');
Route::get('monitoringload', [MonitoringController::class,'load']);
Route::get('monitoringsuhu', [MonitoringController::class,'readsuhu']);
Route::get('monitoringkelembapan', [MonitoringController::class,'readkelembapan']);
//kontrol
Route::get('kontrol', [KontrolController::class,'index'])->middleware('auth');
Route::post('kontrola', [KontrolController::class,'store']);
//laporan
Route::get('laporan', [LaporanController::class,'index'])->middleware('auth');
Route::get('laporan/delete/{id}', [LaporanController::class, 'delete']);
Route::get('laporanDetail/{id}', [LaporanController::class, 'detail'])->middleware('auth');;

//ngirim alat
Route::get('insertdata/{suhu}/{kelembapan}/{berat}', [MonitoringController::class, 'tambahSensor']);
Route::get('kontrolsuhu', [KontrolController::class,'kontrolsuhu']);
Route::get('kontrolberat', [KontrolController::class,'kontrolberat']);
Route::get('kontrolblower', [KontrolController::class,'kontrolblower']);
Route::get('awalberat', [KontrolController::class,'awalberat']);
Route::get('minsuhu', [KontrolController::class,'minsuhu']);


