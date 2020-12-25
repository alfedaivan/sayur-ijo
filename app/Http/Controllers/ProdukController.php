<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Support\Facades\File;



class ProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
    $category = Category::all();
    $product = Product::orderBy('products.id', 'asc')
    ->join('categories', 'products.category_id', '=', 'categories.id')
    ->where(function($query) use ($request){
        $query->where('product_name', 'LIKE', '%' . $request->search . '%')
              ->orWhere('category', 'LIKE', '%' . $request->search . '%');
    })
    ->paginate(10, array('products.id','products.photo','products.product_name',
                        'categories.id as categoryid','categories.category as category',
                        'products.price','products.stock'));

        return view('admin/product/tbl_product',compact('product','category'));
   }

    public function ProductAdd(){
        $category = Category::all();
        return view('admin/product/add_product', compact('category'));
    }

    public function ProductAddValidation(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'photo' => 'required | mimes:jpg,png,jpeg | max:5120',
            'category_id' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $file = $request->file('photo');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'images';
        $file->move($tujuan_upload,$nama_file);

        Product::create([
            'product_name'=>$request->product_name,
            'photo' => $nama_file,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'stock'=>$request->stock,
        ]);

        return redirect('/dashboard/product')->with('success', 'Product created succesfully.');
    }
    public function ProductEdit($id){
        $product=Product::findOrFail($id);
        $category = Category::all();
        return view('admin/product/edit_product',compact('product','category'));
    }

    public function ProductEditValidation(Request $request, $id)
    {
        $nama_file = $request->hidden_image;
        $file = $request->file('photo');

        if ($file !='') {
            $this->validate($request, [
                'product_name' => 'required',
                'photo' => 'required | mimes:jpg,png,jpeg | max:5120',
                'category_id' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'created_at' => 'required',
            ]);
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'images';
                $file->move($tujuan_upload,$nama_file);
        }else{
            $request->validate([
                'product_name' => 'required',
                'category_id' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'created_at' => 'required',
            ]);
        }

        $form_data = array(
            'product_name'=>$request->product_name,
            'photo' => $nama_file,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'created_at'=>$request->created_at,
        );
        Product::where('id',$id)->update($form_data);
        return redirect('/dashboard/product')->with('success', 'Product updated succesfully.');
    }

    public function ProductDelete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('dashboard/product')->with('success', 'Product deleted succesfully.');
    }

}
