<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\berandaController;

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
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');;

Route::get('/cektemplate', function () {
    return view('layouts.template');
});

Route::get('/index', function () {
    return view('beranda.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data Beranda
Route::get('/beranda', [berandaController::class, 'index']);
