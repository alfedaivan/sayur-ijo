<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
// pages controllers
    public function Dashboard(){
        return view('admin/dashboard/dashboard');
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
    // end

    // category
    public function Category(Request $request){
        // $kategori = Kategori::paginate(5);
        $kategori = Kategori::where([
            ['kategori', '!=', NULL],
            [function ($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('kategori', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ]) -> paginate(5);
        return view('admin/category/tbl_category', ['kategori' => $kategori]);
    }
    public function CategoryAdd(){
        return view('admin/category/add_category');
    }
    public function CategoryAddValidation(Request $request){
        $this->validate($request,[
            'kategori' => 'required'
        ]);
        Kategori::create([
            'kategori' => $request->kategori
        ]);
        return redirect('dashboard/category');
    }
    public function CategoryEdit($id){
        $kategori = Kategori::find($id);
        return view('admin/category/edit_category',['kategori' => $kategori]);
    }
    public function CategoryEditValidation($id, Request $request){
        $this->validate($request,[
            'kategori' => 'required'
        ]);

        $kategori= Kategori::find($id);
        $kategori->kategori = $request->kategori;
        $kategori->save();
        return redirect('dashboard/category');
    }
    public function CategoryDelete($id){
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->back();
    }

    // end

     // transaction
    public function Transaction(){
        return view('admin/transaction/tbl_transaction');
    }
    // end


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
