<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah; // Pastikan Model Matakuliah di-import

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menghasilkan 20 data mata kuliah dummy menggunakan Factory
        Matakuliah::factory()->count(20)->create();
    }
}
