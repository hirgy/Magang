<?php

namespace App\Http\Controllers;

use App\Models\DataWarga;
use Illuminate\Http\Request;

class DataWargaController extends Controller
{
    public function showData()
    {
        $dataWarga = DataWarga::all();
        return view('datawarga.show', ['dataWarga' => $dataWarga]);
    }
}
