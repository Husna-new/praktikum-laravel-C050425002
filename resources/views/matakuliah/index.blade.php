@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah') {{-- <-- DI SINI ANDA MENAMBAHKANNYA --}}

@section('konten')

    <h1>Daftar Mata Kuliah</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Soal 1: Menerapkan @forelse dan @empty --}}
            @forelse ($matakuliah as $mk)
                {{-- Soal 3: Memanfaatkan $loop->even untuk pewarnaan selang-seling --}}
                <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}">
                    
                    {{-- Soal 3: Memanfaatkan $loop->iteration untuk nomor urut otomatis --}}
                    <td>{{ $loop->iteration }}</td>
                    
                    <td>{{ $mk->kode }}</td>
                    <td>{{ $mk->nama }}</td>
                    
                    <td>
                        {{ $mk->sks }}
                        
                        {{-- Soal 2: Penanda visual untuk SKS lebih dari 3 menggunakan @if --}}
                        @if ($mk->sks > 3)
                            <span style="color: red; font-weight: bold;">(SKS Besar)</span>
                        @endif
                    </td>

                    <!-- Menampilkan Nama Dosen Pengampu dari relasi -->
                    <td>
                        {{ $mk->dosen ? $mk->dosen->name : 'Belum Ditentukan' }}
                    </td>

                    <td>
                        <a href="{{ route('matakuliah.show', $mk->id) }}">Lihat Detail</a>
                    </td>
                </tr>
                @empty
                {{-- colspan diubah menjadi 6 karena jumlah kolom tabel sekarang ada 6 --}}
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data mata kuliah.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

