<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // category
    public function Category(Request $request){
        $category = Category::orderBy('category', 'asc')
        ->where(function($query) use ($request){
            $query->where('category', 'LIKE', '%' . $request->search . '%');
            })
        -> paginate(10);
        return view('admin/category/tbl_category', ['category' => $category,]);
    }
    public function CategoryAdd(){
        return view('admin/category/add_category');
    }
    public function CategoryAddValidation(Request $request){
        $this->validate($request,[
            'category' => 'required'
        ]);
        Category::create([
            'category' => $request->category
        ]);
        return redirect('dashboard/category')->with('success', 'Kategori berhasil ditambahkan.');
    }


    public function CategoryEdit($id){
        $category = Category::find($id);
        return view('admin/category/edit_category',['category' => $category]);
    }
    public function CategoryEditValidation($id, Request $request){
        $this->validate($request,[
            'category' => 'required'
        ]);

        $category= Category::find($id);
        $category->category = $request->category;
        $category->save();
        return redirect('dashboard/category')->with('success', 'Kategori berhasil diedit.');
    }
    public function CategoryDelete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('dashboard/category')->with('success', 'Kategori berhasil dihapus.');
    }

    // end
}
