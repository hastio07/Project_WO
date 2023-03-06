<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('TampilanUser/home');
})->name('home')->middleware('prevent-back-history');

Route::get('/dashboard', function () {
    return view('TampilanAdmin/Dashboard');
})->middleware(['auth:admins', 'prevent-back-history']);

Route::get('/manageakun', function () {
    return view('TampilanAdmin/ManageAkun');
})->middleware(['auth:admins', 'prevent-back-history']);

Route::get('/managejadwal', function () {
    return view('TampilanAdmin/ManageJadwal');
})->middleware(['auth:admins', 'prevent-back-history']);

Route::get('/manage-produk', function () {
    return view('TampilanAdmin/ManageProduk');
})->middleware(['auth:admins', 'prevent-back-history']);

Route::get('/manage-artikel', function () {
    return view('TampilanAdmin/ManageArtikel');
})->middleware(['auth:admins', 'prevent-back-history']);

Route::get('/manageperusahaan', function () {
    return view('TampilanAdmin/ManagePerusahaan');
})->middleware(['auth:admins', 'prevent-back-history']);

Route::get('/manage-gallery', function () {
    return view('TampilanAdmin/ManageGallery');
})->middleware(['auth:admins', 'prevent-back-history']);

Route::get('/manage-pesanan', function () {
    return view('TampilanAdmin/ManagePesanan');
})->middleware(['auth:admins', 'prevent-back-history']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest:admins');
Route::post('/login',  [LoginController::class, 'login_aja']);
Route::post('/logout', [LoginController::class, 'logout_aja']);
Route::resource('/managepegawai', PegawaiController::class);
