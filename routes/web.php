<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\DataWargaController;
use App\Http\Controllers\DataKepalaKeluargaController;
use App\Http\Controllers\DataIbuHamilController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\DataAsetController;
use App\Http\Controllers\DataPinjamanController;
use App\Http\Controllers\BantuanSosialController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/tampilkan-data', function () {
//     return view('tampilan');
// });

Route::get('/tampilkan-data', [TampilanController::class, 'tampilkanData']);

Route::get('/datawarga', [DataWargaController::class, 'showData']);

Route::get('/datakepalakeluarga', [DataKepalaKeluargaController::class, 'kepalakeluarga']);

Route::get('/dataibuhamil', [DataIbuHamilController::class, 'ibuhamil']);

Route::get('/balita', [BalitaController::class, 'balita']);

Route::get('/dataaset', [DataAsetController::class, 'dataaset']);

Route::get('/datapinjaman', [DataPinjamanController::class, 'datapinjaman']);

Route::get('/bantuansosial', [BantuanSosialController::class, 'bantuansosial']);
