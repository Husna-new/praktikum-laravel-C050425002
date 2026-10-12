<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah; // Pastikan Model MataKuliah sudah ada
use App\Models\User; // Pastikan model User di-import
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matakuliah = MataKuliah::with('dosen')->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function show(MataKuliah $matakuliah)
    {
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function create()
    {
    // Mengambil data user/dosen untuk pilihan di dropdown form
    $dosens = User::all(); 
    return view('matakuliah.create', compact('dosens'));
    }

    public function store(Request $request)
    {
    // Validasi data inputan
    $request->validate([
        'kode_mk'  => 'required|unique:matakuliahs,kode_mk',
        'nama_mk'  => 'required',
        'sks'      => 'required|integer',
        'semester' => 'required|integer',
        'dosen_id' => 'nullable|exists:users,id',
    ]);

    // Menyimpan data menggunakan method create() dari Eloquent
    Matakuliah::create($request->all());

    // Redirect kembali ke halaman daftar matakuliah dengan pesan sukses
    return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }


}