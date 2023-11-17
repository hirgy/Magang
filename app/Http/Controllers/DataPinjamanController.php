<?php

namespace App\Http\Controllers;

use App\Models\DataPinjaman;

class DataPinjamanController extends Controller
{
    public function datapinjaman()
    {
        $dataPinjaman = DataPinjaman::all();
        return view('datawarga.datapinjaman', compact('dataPinjaman'));
    }
}
