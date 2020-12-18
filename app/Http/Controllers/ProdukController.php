<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
    $produk = Produk::orderBy('produks.id', 'asc')
    ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
    ->paginate(5, array('produks.id','produks.foto','produks.nama_produk','kategoris.kategori as kategori','produks.harga','produks.stok'));

       return view('admin/product/tbl_product',compact('produk','kategori'));
   }

    public function ProductAdd(){
        return view('admin/product/add_product');
    }

    public function ProductAddValidation(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'foto' => 'required|image|max:2048',
            'id_kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $file = $request->file('foto');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'images';
        $file->move($tujuan_upload,$nama_file);

        Produk::create([
            'nama_produk'=>$request->nama_produk,
            'foto' => $nama_file,
            'id_kategori'=>$request->id_kategori,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
        ]);

        return redirect('/dashboard/product')->with('success', 'Product is succesfully Added.');
    }
    public function ProductEdit($id){
        $produk=Produk::findOrFail($id);
        return view('admin/product/edit_product',compact('produk'));
    }

    public function ProductEditValidation(Request $request, $id)
    {
        $nama_file = $request->hidden_image;
        $file = $request->file('foto');

        if ($file !='') {
            $this->validate($request, [
                'nama_produk' => 'required',
                'foto' => 'required|image|max:2048',
                'id_kategori' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'created_at' => 'required',
            ]);
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'images';
                $file->move($tujuan_upload,$nama_file);
        }else{
            $request->validate([
                'nama_produk' => 'required',
                'id_kategori' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'created_at' => 'required',
            ]);
        }

        $form_data = array(
            'nama_produk'=>$request->nama_produk,
            'foto' => $nama_file,
            'id_kategori'=>$request->id_kategori,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
            'created_at'=>$request->created_at,
        );
        Produk::where('id',$id)->update($form_data);
        return redirect('/dashboard/product')->with('success', 'Product is successfully updated');
    }

    public function ProductDelete($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect('dashboard/product')->with('success', 'Product is deleted');
    }
}
