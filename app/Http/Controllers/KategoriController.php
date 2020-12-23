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
        $category = Category::where([
            ['category', '!=', NULL],
            [function ($query) use ($request){
                if(($term = $request->term)){
                    $query->Where('category', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ]) -> paginate(10);
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
        return redirect('dashboard/category')->with('success', 'Category created succesfully.');
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
        return redirect('dashboard/category')->with('success', 'Category updated succesfully.');
    }
    public function CategoryDelete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('dashboard/category')->with('success', 'Category deleted succesfully.');
    }

    // end
}
