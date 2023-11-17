<?php
// app\Models\DataPinjaman.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPinjaman extends Model
{
    use HasFactory;

    protected $table = 'datapinjaman';

    protected $fillable = [
        'NoKK',
        'MemilikiPinjamanPerbankan',
        'MemilikiPinjamanKoperasi',
        'SimpanPinjam',
        'TerjeratPinjol',
        'TerjeratRentenir',
        // ... (sesuaikan dengan kolom pada tabel DataPinjaman)
    ];
}
