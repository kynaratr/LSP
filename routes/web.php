<?php

use App\Http\Controllers\ProfilPelangganController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Route::get('/', function () {
    return view('landing2');
});
Route::get('/aboutc', function () {
    return view('aboutc');
});
Route::get('/aboutf', function () {
    return view('aboutf');
});
Route::get('/abouts', function () {
    return view('abouts');
});
Route::get('/abouth', function () {
    return view('abouth');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('auth');

Route::resource('pelanggan', \App\Http\Controllers\PelangganController::class)->middleware('auth');

Route::resource('karyawan', \App\Http\Controllers\KaryawanController::class)->middleware('auth');

Route::resource('paketwisata', \App\Http\Controllers\PaketWisataController::class)->middleware('auth');
Route::resource('daftarpaket', \App\Http\Controllers\DaftarpaketController::class)->middleware('auth');
Route::resource('reservasi', \App\Http\Controllers\ReservasiController::class)->middleware('auth');
Route::resource('reservasio', \App\Http\Controllers\Reservasio::class)->middleware('auth');
Route::resource('profil-pelanggan', \App\Http\Controllers\ProfilPelangganController::class)->middleware('auth'); 
Route::get('/exportpdf', [App\Http\Controllers\ReservasiController::class, 'exportpdf'])->name('exportpdf');
Route::get('/exportpdf2', [App\Http\Controllers\KaryawanController::class, 'exportpdf2'])->name('exportpdf2');
Route::resource('profil-reservasi', \App\Http\Controllers\ProfilReservasiController::class)->middleware('auth'); 
Route::resource('laporan', \App\Http\Controllers\LaporanController::class)->middleware('auth');

Route::get('/laporanfilter/{tglawal?}/{status?}/{tglakhir?}', [LaporanController::class, 'laporanf']);
Route::get('/laporanf', [LaporanController::class, 'reservasi']);
// Route::get('/', function () {
//     $paket_wisata = PaketWisata::orderBy('id','desc')->get();
//     return view('landing2', [
//         'paket_wisata' => $paket_wisata]);
//     });
