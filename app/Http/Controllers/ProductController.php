<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listdata()
    {
        $products = Product::all();
        return view('listdata', ['products' => $products]);
    }
    //crudd
}
