#--------- modul 2, praktikum 4, tugas =mandiri 2

@extends('layouts.app')

@section('judul', 'Tambah Mata Kuliah Baru')

@section('konten')
    <h1>Tambah Mata Kuliah Baru</h1>

    {{-- Tampilkan error validasi jika ada --}}
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form HTML untuk menambah data --}}
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf {{-- Token keamanan wajib di Laravel untuk method POST --}}

        <div style="margin-bottom: 10px;">
            <label for="kode_mk">Kode MK:</label><br>
            <input type="text" id="kode_mk" name="kode_mk" value="{{ old('kode_mk') }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="nama_mk">Nama Mata Kuliah:</label><br>
            <input type="text" id="nama_mk" name="nama_mk" value="{{ old('nama_mk') }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="sks">SKS:</label><br>
            <input type="number" id="sks" name="sks" value="{{ old('sks') }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="semester">Semester:</label><br>
            <input type="number" id="semester" name="semester" value="{{ old('semester') }}" required>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="dosen_id">Dosen Pengampu:</label><br>
            <select id="dosen_id" name="dosen_id">
                <option value="">-- Pilih Dosen Pengampu --</option>
                @foreach($dosens as $dosen)
                    <option value="{{ $dosen->id }}">{{ $dosen->name ?? $dosen->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" style="padding: 5px 15px;">Simpan</button>
        <a href="{{ route('matakuliah.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
@endsection