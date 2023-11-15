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
        Schema::create('data_aset', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('No KK');
            $table->bigInteger('NIK');
            $table->string('Nama');
            $table->string('Memiliki Telepon Seluler');
            $table->string('Memiliki Fasilitas Internet');
            $table->string('Memiliki Perangkat Komputer');
            $table->string('Memiliki Kendaraan Beroda Dua');
            $table->string('Memiliki Kendaraan Beroda Empat');
            $table->string('Memiliki Kendaraan Lainnya');
            $table->string('Memiliki Kendaraan Listrik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_aset');
    }
};
