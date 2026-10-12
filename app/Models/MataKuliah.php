<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    // Menyesuaikan nama tabel di database (jika tabelnya bernama matakuliahs)
    protected $table = 'matakuliahs';

    // Menentukan kolom apa saja yang boleh diisi (mass assignment)
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'semester',
        'dosen_id',
    ];

    // Tambahkan relasi belongsTo ke User (Dosen Pengampu)
    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }
}
