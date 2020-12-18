<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Kategori;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('admin/dashboard/dashboard', compact('produk','kategori'));
    }
}
