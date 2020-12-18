<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\Kategori;

class AdminController extends Controller
{
    public function Dashboard(){
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('admin/dashboard/dashboard', compact('produk','kategori'));
    }

    // user
    public function User(){
        return view('admin/user/tbl_user');
    }
    public function UserAdd(){
        return view('admin/user/add_user');
    }
    public function UserEdit(){
        return view('admin/user/edit_user');
    }
    // end
}
