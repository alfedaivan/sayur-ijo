<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Daftar;
use App\Models\History;
use App\Models\Keranjang;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        // $daftar = Daftar::all();
        // $keranjang = Keranjang::all();
        $total = History::sum('total');
        // $histories = History::groupBy('session_id');
        $histories = History::all();
        $category = Category::all();
        $product = Product::all();
        return view('admin/dashboard/dashboard', compact('product','category', 'histories', 'total'));
    }
}
