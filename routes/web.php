<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, Laravel 12! Saya sedang praktikum Pemrograman Web Lanjut.';
});
 
Route::get('/profile', function () {
    return view('profile', [
        'nama'  => 'Rama Dinantiar',
        'nim'   => '202331044',
        'prodi' => 'Teknik Informatika',
    ]);
});
