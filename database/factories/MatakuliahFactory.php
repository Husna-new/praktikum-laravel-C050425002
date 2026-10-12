<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Membuat kode mata kuliah unik (contoh: MK-482)
            'kode_mk' => $this->faker->unique()->bothify('MK-###'),
            
            // Memilih nama mata kuliah secara acak dari daftar di bawah
            'nama_mk' => $this->faker->randomElement([
                'Pemrograman Web',
                'Basis Data',
                'Algoritma dan Pemrograman',
                'Jaringan Komputer',
                'Sistem Operasi',
                'Kecerdasan Buatan',
                'Struktur Data'
            ]),

            // SKS di antara angka 1 sampai 4
            'sks' => $this->faker->numberBetween(1, 4),
            
            // Semester di antara angka 1 sampai 8
            'semester' => $this->faker->numberBetween(1, 8),
            
            // Mengambil ID dosen/user secara acak (opsional untuk relasi)
            'dosen_id' => \App\Models\User::inRandomOrder()->first()?->id ?? 1,
        ];
    }
}
