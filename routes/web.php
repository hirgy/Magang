<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DataAsetController;
use App\Http\Controllers\DataBalitaController;
use App\Http\Controllers\DatabantuanSosialController;
use App\Http\Controllers\DataIbuHamilController;
use App\Http\Controllers\DataKepalaKeluargaController;
use App\Http\Controllers\DataPinjamanController;
use App\Http\Controllers\DataWargaController;
use Illuminate\Routing\RouteUrlGenerator;

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

Route::get('/listdata', function () {
    return view('listdata');
});
Route::get('/crud', function () {
    return view('crud');
});
Route::get('/create', function () {
    return view('create');
});