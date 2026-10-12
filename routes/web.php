<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\MataKuliahController;

//Route profile
Route::get('/Profile', function(){
    return 'ini adalah halaman profile saya.';
});

//Route kontak
Route::get('/kontak', function(){
    return 'Hubungi di kontak:.....';
});

//Route profile
Route::get('/About', function(){
    return 'ini adalah halaman ptentang website laravel.';
});

Route::get('/mahasiswa', function ()
{
   return view('welcome');
});

Route::prefix('akademik')->group(function (){
     //Route untuk mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
        ->where('nim', '[0-9]+')
        ->name('mahasiswa.show');

        //route untuk matakuliah
    Route::resource('/matakuliah', MatakuliahController::class)->only ([
            'index', 'show', 'create', 'store'
    ]);
});

      //return 'Halaman Daftar Matakuliah';
    //})->name('matakuliah.index');


    //Route view profile
Route::get('/profil', function () {
    return view('profil')
        ->with('nama', 'Budi Santoso')
        ->with('nim', '12345678')
        ->with('prodi', 'Teknik Informatika');
});
 
Route::resource('matakuliah', MataKuliahController::class)->only(['index', 'show']);



use App\Http\Controllers\LatihanController;

Route::get('/latihan', [LatihanController::class, 'index']);


#use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cariMahasiswa']);

#modul 2, praktikum 4 tugas mandiri 2
Route::get('/mahasiswa/form-cari', function () {
    return view('mahasiswa.cari');
});

Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');