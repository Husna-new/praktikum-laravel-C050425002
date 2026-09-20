<?php

use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa', function () {
    return "halaman mahasiswa";
});

Route::get('/halo', function () {
    return "Halo dari Laravel!";
});
