<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatawargaTable extends Migration
{
    public function up()
    {
        // Pengecekan apakah tabel sudah ada atau belum
        if (!Schema::hasTable('datawarga')) {
            Schema::create('datawarga', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('NoKK')->unique();
                $table->string('NIK')->unique();
                $table->string('Nama');
                $table->string('TempatLahir')->nullable();
                $table->date('TanggalLahir')->nullable();
                $table->date('TanggalMeninggal')->nullable();
                $table->integer('Tahun')->nullable();
                $table->integer('Bulan')->nullable();
                $table->integer('Hari')->nullable();
                $table->string('JenisKelamin')->nullable();
                $table->string('HubunganDenganKepalaKeluarga')->nullable();
                $table->boolean('Hamil')->default(false);
                $table->date('HPHT')->nullable();
                $table->integer('UsiaKehamilan')->nullable();
                $table->string('Agama')->nullable();
                $table->string('Kewarganegaraan')->nullable();
                $table->string('StatusKawin')->nullable();
                $table->string('Pendidikan')->nullable();
                $table->string('GolonganDarah')->nullable();
                $table->string('Pekerjaan')->nullable();
                $table->boolean('KelainanFisik')->default(false);
                $table->boolean('Cacat')->default(false);
                $table->string('Alamat')->nullable();
                $table->integer('RW')->nullable();
                $table->integer('RT')->nullable();
                $table->string('Desa')->nullable();
                $table->string('Kecamatan')->nullable();
                $table->string('AktaLahir')->nullable();
                $table->string('NoAktaLahir')->nullable();
                $table->string('SuratKeteranganKematian')->nullable();
                $table->string('NoSuratKeteranganKematian')->nullable();
                $table->string('NIKAyah')->nullable();
                $table->string('NIKIbu')->nullable();
                $table->string('NoAktaNikah')->nullable();
                $table->date('TanggalNikah')->nullable();
                $table->string('NoAktaCerai')->nullable();
                $table->date('TanggalCerai')->nullable();
                $table->double('PendapatanPerBulan')->nullable();
                $table->boolean('AsuransiKesehatan')->default(false);

                // Tambahkan kolom sesuai kebutuhan
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('datawarga');
    }
}
