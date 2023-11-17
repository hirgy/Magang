<?php

// app\Http\Controllers\DataKepalaKeluargaController.php

namespace App\Http\Controllers;

use App\Models\DataKepalaKeluarga;

class DataKepalaKeluargaController extends Controller
{
    public function kepalakeluarga()
    {
        $dataKepalaKeluarga = DataKepalaKeluarga::all();
        return view('datawarga.kepalakeluarga', compact('dataKepalaKeluarga'));
    }
}
