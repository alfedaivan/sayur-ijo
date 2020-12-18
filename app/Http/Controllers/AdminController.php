<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Kategori;

class AdminController extends Controller
{
<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth');
=======
    public function Dashboard(){
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('admin/dashboard/dashboard', compact('produk','kategori'));
>>>>>>> 252fa6947f128c2911aa4ed837caf8d175d91845
    }

    public function index(){
        return view('admin/dashboard/dashboard');
    }
}
