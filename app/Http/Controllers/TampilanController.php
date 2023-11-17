<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Models\DataWarga;
// use App\Models\DataKepalaKeluarga;
// use App\Models\DataIbuHamil;
// use App\Models\Balita;
// use App\Models\DataAset;
// use App\Models\DataPinjaman;
// use App\Models\BantuanSosial;

// class TampilanController extends Controller
// {
//     public function tampilkanData()
//     {
//         $dataWarga = DataWarga::all();
//         $dataKepalaKeluarga = DataKepalaKeluarga::all();
//         $dataIbuHamil = DataIbuHamil::all();
//         $dataBalita = Balita::all();
//         $dataAset = DataAset::all();
//         $dataPinjaman = DataPinjaman::all();
//         $dataBantuanSosial = BantuanSosial::all();

//         return view('tampilan', compact('dataWarga', 'dataKepalaKeluarga', 'dataIbuHamil', 'dataBalita', 'dataAset', 'dataPinjaman', 'dataBantuanSosial'));
//     }
// }