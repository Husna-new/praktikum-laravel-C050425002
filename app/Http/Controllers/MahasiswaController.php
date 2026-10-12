<?php

namespace App\Http\Controllers;


use App\Models\Matakuliah;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\MataKuliahController;


class MahasiswaController extends Controller
{
    public function index()
    {
        
    //Mengambil semua data mahasiswa dari database
    $mahasiswa = Mahasiswa::all();
    
    // Mengirim data ke view resources/views/mahasiswa/index.blade.php
    return view('mahasiswa.index', compact('mahasiswa'));
        
    }

    public function show($nim)
    {
        return "Halaman detail mahasiswa dengan NIM: {$nim}";
    }
}





#use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    // ... method lainnya ...

    public function cariMahasiswa(Request $request)
    {
        $nama = $request->input('nama'); // Mengambil data dari query string ?nama=...

        return "Hasil pencarian mahasiswa dengan kata kunci: {$nama}";
    }
}


