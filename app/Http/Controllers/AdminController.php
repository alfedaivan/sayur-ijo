<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard(){
        return view('admin/dashboard');
    }
    public function Product(){
        return view('admin/product/tbl_product');
    }
}
