<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kategori;

class KategoriController extends Controller
{
    // category
    public function Category(Request $request){
        $kategori = Kategori::where([
            ['kategori', '!=', NULL],
            [function ($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('kategori', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ]) -> paginate(5);
        return view('admin/category/tbl_category', ['kategori' => $kategori,]);
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
        return redirect('dashboard/category')->with('success', 'Kategori berhasil diupdate');
    }
    public function CategoryDelete($id){
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect('dashboard/category')->with('success', 'Kategori berhasil dihapus');
    }

    // end
}
