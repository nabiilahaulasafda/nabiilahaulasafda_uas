<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\pengajuanController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\sertifikatController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');;

Route::get('/cektemplate', function () {
    return view('layouts.template');
});

Route::get('/index', function () {
    return view('pengajuan.add');
});

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
