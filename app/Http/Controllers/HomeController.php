<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // ambil semua produk
        $products = Product::latest()->get();

        // lempar ke view home
        return view('home', compact('products'));
    }
}
