<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BantuanSosial extends Model
{
    use HasFactory;

    protected $table = 'bantuansosial';

    protected $fillable = [
        'NoKK',
        'NIK',
        'Nama',
        'BLTPusat',
        'BLTDesa',
        'BPNT',
        'BPUM',
        'BST',
        'PKH',
        'Sembako',
        'KIP',
        'KIS',
        // ... (sesuaikan dengan kolom pada tabel BantuanSosial)
    ];
}
