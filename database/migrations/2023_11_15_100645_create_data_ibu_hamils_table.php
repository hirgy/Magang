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
        Schema::create('data_ibu_hamil', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('No KK');
            $table->bigInteger('NIK');
            $table->string('Nama');
            $table->string('Tempat Lahir');
            $table->string('Tanggal Lahir');
            $table->string('Tanggal Kematian');
            $table->integer('Tahun');
            $table->integer('Bulan');
            $table->integer('Hari');
            $table->string('Jenis Kelamin');
            $table->string('Hubungan dengan Kepala Keluarga');
            $table->string('Hamil');
            $table->string('Hari Pertama Haid');
            $table->string('Agama');
            $table->string('Kewarganegaraan');
            $table->string('Status Kawin');
            $table->string('Pendidikan');
            $table->string('Golongan Darah');
            $table->string('Pekerjaan');
            $table->string('Kelainan Fisik')->nullable();
            $table->string('Cacat')->nullable();
            $table->string('Alamat');
            $table->string('RW');
            $table->string('RT');
            $table->string('Desa');
            $table->string('Kecamatan');
            $table->string('Akta Lahir');
            $table->bigInteger('No Akta Lahir');
            $table->string('Surat Keterangan Kematian')->nullable();
            $table->bigInteger('No Surat Keterangan Kematian')->nullable();
            $table->bigInteger('NIK Ayah');
            $table->bigInteger('NIK Ibu');
            $table->bigInteger('No Akta Nikah');
            $table->string('Tanggal Nikah')->nullable();
            $table->string('No Akta Cerai')->nullable();
            $table->string('Tanggal Cerai')->nullable();
            $table->string('Pendapatan Per Bulan');
            $table->string('Asuransi Kesehatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ibu_hamil');
    }
};
