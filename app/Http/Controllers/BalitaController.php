<?php

// app\Http\Controllers\BalitaController.php

namespace App\Http\Controllers;

use App\Models\Balita;

class BalitaController extends Controller
{
    public function balita()
    {
        $dataBalita = Balita::all();
        return view('datawarga.balita', compact('dataBalita'));
    }
}
