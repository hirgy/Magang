<?php
namespace App\Http\Controllers;

use App\Models\BantuanSosial;

class BantuanSosialController extends Controller
{
    public function bantuansosial()
    {
        $bantuanSosial = BantuanSosial::all();
        return view('datawarga.bantuansosial', compact('bantuanSosial'));
    }
}
