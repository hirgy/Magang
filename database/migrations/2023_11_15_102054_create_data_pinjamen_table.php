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
        Schema::create('data_pinjaman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('No KK');
            $table->bigInteger('NIK');
            $table->string('Nama');
            $table->string('Memiliki Pinjaman Perbankan');
            $table->string('Memiliki Pinjaman Koperasi');
            $table->string('Simpan Pinjam');
            $table->string('Terjerat Pinjol');
            $table->string('Terjerat Rentenir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pinjaman');
    }
};
