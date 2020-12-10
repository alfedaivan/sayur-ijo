<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
// pages controllers
    public function Dashboard(){
        return view('admin/dashboard');
    }
    // product
    public function Product(){
        return view('admin/product/tbl_product');
    }
    public function ProductAdd(){
        return view('admin/product/add_product');
    }
    public function ProductEdit(){
        return view('admin/product/edit_product');
    }
    // category
    public function Category(){
        return view('admin/category/tbl_category');
    }
    public function CategoryAdd(){
        return view('admin/category/add_category');
    }
    public function CategoryEdit(){
        return view('admin/category/edit_category');
    }
    // transaction
    public function Transaction(){
        return view('admin/transaction/tbl_transaction');
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
}
