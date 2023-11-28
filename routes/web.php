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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


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
    return view('login.login');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    // Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route::get('/tampilkan-data', function () {
//     return view('tampilan');
// });

Route::get('/datawarga', [DataWargaController::class, 'showData']);

Route::get('/datakepalakeluarga', [DataKepalaKeluargaController::class, 'kepalakeluarga']);

Route::get('/dataibuhamil', [DataIbuHamilController::class, 'ibuhamil']);

Route::get('/balita', [BalitaController::class, 'balita']);

Route::get('/dataaset', [DataAsetController::class, 'dataaset']);

Route::get('/datapinjaman', [DataPinjamanController::class, 'datapinjaman']);

Route::get('/bantuansosial', [BantuanSosialController::class, 'bantuansosial']);
