<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/layanan/{slug}', [PageController::class, 'detail'])->name('layanan.detail');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/halo', function () {
//     return 'Halo, Laravel 12! Saya sedang praktikum Pemrograman Web Lanjut.';
// });
 
// Route::get('/profile', function () {
//     return view('profile', [
//         'nama'  => 'Rama Dinantiar',
//         'nim'   => '202331044',
//         'prodi' => 'Teknik Informatika',
//     ]);
// });
