<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAset extends Model
{
    use HasFactory;

    protected $table = 'dataaset';

    protected $fillable = [
        'NoKK',
        'MemilikiTeleponSeluler',
        'MemilikiFasilitasInternet',
        'MemilikiPerangkatKomputer',
        'MemilikiKendaraanBerodaDua',
        'MemilikiKendaraanBerodaEmpat',
        'MemilikiKendaraanLainnya',
        'MemilikiKendaraanListrik',
        // ... (sesuaikan dengan kolom pada tabel DataAset)
    ];
}