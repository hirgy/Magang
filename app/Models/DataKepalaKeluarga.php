<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKepalaKeluarga extends Model
{
    use HasFactory;

    protected $table = 'datakepalakeluarga';

    protected $fillable = [
        'NoKK',
        'NIK',
        'Nama',
        // ... (sesuaikan dengan kolom pada tabel DataKepalaKeluarga)
    ];
}
