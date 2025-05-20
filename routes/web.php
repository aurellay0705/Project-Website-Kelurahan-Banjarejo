<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/publikasi', function () {
    return view('publikasi');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

Route::get('/pecelmadiun', function () {
    return view('pecelmadiun');
});






