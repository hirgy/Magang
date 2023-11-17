<?php

namespace App\Http\Controllers;

use App\Models\DataIbuHamil;

class DataIbuHamilController extends Controller
{
    public function ibuhamil()
    {
        $dataIbuHamil = DataIbuHamil::all();
        return view('datawarga.ibuhamil', compact('dataIbuHamil'));
    }
}
