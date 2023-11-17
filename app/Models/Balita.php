<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;

    protected $table = 'balita';

    protected $fillable = [
        'NoKK',
        'NIK',
        'LingkarKepala',
        'LingkarLengan',
        'BeratBadan',
        'TinggiBadan',
        // ... (sesuaikan dengan kolom pada tabel Balita)
    ];
}
