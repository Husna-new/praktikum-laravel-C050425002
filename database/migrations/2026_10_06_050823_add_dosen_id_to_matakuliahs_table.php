<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('matakuliahs', function (Blueprint $table) {
            // Menambahkan kolom foreign key dosen_id yang mengacu ke id pada tabel users
            $table->foreignId('dosen_id')
                  ->nullable()
                  ->after('id') // Meletakkan kolom dosen_id setelah kolom id
                  ->constrained('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('matakuliahs', function (Blueprint $table) {
            // Menghapus constraint foreign key dan kolom dosen_id saat rollback
            $table->foreignId('dosen_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->dropForeign(['dosen_id']);
            $table->dropColumn('dosen_id');
        });
    }
};
