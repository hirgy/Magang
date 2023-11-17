<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataWarga extends Model
{
    protected $table = 'datawarga';

    protected $fillable = [
        'NoKK', 'NIK', 'Nama', 'TempatLahir', 'TanggalLahir', 'TanggalMeninggal', 'Tahun', 'Bulan', 'Hari',
        'JenisKelamin', 'HubunganDenganKepalaKeluarga', 'Hamil', 'HPHT', 'UsiaKehamilan', 'Agama',
        'Kewarganegaraan', 'StatusKawin', 'Pendidikan', 'GolonganDarah', 'Pekerjaan', 'KelainanFisik', 'Cacat',
        'Alamat', 'RW', 'RT', 'Desa', 'Kecamatan', 'AktaLahir', 'NoAktaLahir', 'SuratKeteranganKematian',
        'NoSuratKeteranganKematian', 'NIKAyah', 'NIKIbu', 'NoAktaNikah', 'TanggalNikah', 'NoAktaCerai',
        'TanggalCerai', 'PendapatanPerBulan', 'AsuransiKesehatan',
    ];

    protected $casts = [
        'Hamil' => 'boolean',
        'KelainanFisik' => 'boolean',
        'Cacat' => 'boolean',
        'AsuransiKesehatan' => 'boolean',
    ];

    // Jika Anda tidak ingin menggunakan kolom created_at dan updated_at
    public $timestamps = false;
}
