<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanContorller extends Controller
{
    public function index()
    {
        $nama = "Adzra Nailal Husna";
        $nim = "c050425002";
        $prodi = "Sistem Informasi Kota Cerdas";

        return "Halo! Perkenalkan nama saya {$nama}, NIM {$nim}, dari program studi {$prodi}.";
    }
}
