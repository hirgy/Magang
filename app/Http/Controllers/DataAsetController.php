<?php
namespace App\Http\Controllers;

use App\Models\DataAset;

class DataAsetController extends Controller
{
    public function dataaset()
    {
        $dataAset = DataAset::all();
        return view('datawarga.dataaset', compact('dataAset'));
    }
}