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
        Schema::create('data_warga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('No KK');
            $table->bigInteger('NIK');
            $table->string('Nama');
            $table->string('Tempat Lahir');
            $table->string('Tanggal Lahir');
            $table->string('Jenis Kelamin');
            $table->string('Agama');
            $table->string('Kewarganergaraan');
            $table->string('Status Kawin');
            $table->string('Alamat');
            $table->timestamps();
        });
    }

    /**S
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_warga');
    }
};
