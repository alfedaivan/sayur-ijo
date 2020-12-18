<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Daftar;
use App\Models\Keranjang;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $daftar = Daftar::all();
        $keranjang = Keranjang::all();
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('admin/dashboard/dashboard', compact('produk','kategori','daftar','keranjang'));
    }
}
