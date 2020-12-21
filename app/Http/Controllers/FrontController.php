<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // change pages controller
    //page home
    public function Index(){
        return view('user/pages/home');
    }
    //page product
    public function Product(){
        $product = Produk::orderBy('produks.nama_produk', 'asc')
        ->paginate(16);
        return view('user/pages/product', compact('product'));
    }
    // page checkout
    public function Checkout(){
        return view('user/pages/checkout');
    }
}
