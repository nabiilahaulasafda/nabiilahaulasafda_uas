<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\pengajuanController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\sertifikatController;
use App\Http\Controllers\petugasController;

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

Route::get('/', function () {
    return view('beranda.index');
})->middleware('auth');;

// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth');;

// Route::get('/cektemplate', function () {
//     return view('layouts.template');
// });

// Route::get('/x', function () {
//     return view('jadwal.open');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data Beranda
Route::get('/beranda', [berandaController::class, 'index']);

// Data Pengajuan
Route::get('/pengajuan', [pengajuanController::class, 'index']);
Route::get('/pengajuan/add', [pengajuanController::class, 'create']);
Route::post('/pengajuan', [pengajuanController::class, 'store']);
Route::get('/pengajuan/open/{id}', [pengajuanController::class, 'show']);
Route::get('/pengajuan/edit/{id}', [pengajuanController::class, 'edit']);
Route::put('/pengajuan/{id}', [pengajuanController::class, 'update']);
Route::delete('/pengajuan/{id}', [pengajuanController::class, 'destroy']);

// Data Jadwal
Route::get('/jadwal', [jadwalController::class, 'index']);
Route::get('/jadwal/add', [jadwalController::class, 'create']);
Route::post('/jadwal', [jadwalController::class, 'store']);
Route::get('/jadwal/open/{id}', [jadwalController::class, 'show']);
Route::get('/jadwal/edit/{id}', [jadwalController::class, 'edit']);
Route::put('/jadwal/{id}', [jadwalController::class, 'update']);
Route::delete('/jadwal/{id}', [jadwalController::class, 'destroy']);

// Data Sertifikat
Route::get('/sertifikat', [sertifikatController::class, 'index']);
Route::get('/sertifikat/add', [sertifikatController::class, 'create']);
Route::post('/sertifikat', [sertifikatController::class, 'store']);
Route::get('/sertifikat/edit/{id}', [sertifikatController::class, 'edit']);
Route::put('/sertifikat/{id}', [sertifikatController::class, 'update']);
Route::delete('/sertifikat/{id}', [sertifikatController::class, 'destroy']);

// Data Petugas
Route::get('/petugas', [petugasController::class, 'index']);
Route::get('/petugas/add', [petugasController::class, 'create']);
Route::post('/petugas', [petugasController::class, 'store']);
Route::get('/petugas/open/{id}', [petugasController::class, 'show']);
Route::get('/petugas/edit/{id}', [petugasController::class, 'edit']);
Route::put('/petugas/{id}', [petugasController::class, 'update']);
Route::delete('/petugas/{id}', [petugasController::class, 'destroy']);
