<?php

namespace App\Http\Controllers;

use App\Models\histories;
use App\Models\History;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Site;

class FrontController extends Controller
{
    // change pages controller
    //page home

    public function Index(){
        $site = Site::all();
        return view('user/pages/home',compact('site'));
    }
    //page product
    public function Product(Request $request){
        $product = Produk::orderBy('produks.nama_produk', 'asc')
        ->paginate(16);
        return view('user/pages/product', compact('product'));
    }
    // page checkout

    public function plus(Request $request)
    {
        $id = $request->get('id');
        $token = $request->session()->token();
        $token = csrf_token();
        $product = Produk::where('id', $id)->get();
        $cart = Keranjang::where(['session_id' => $token, 'product_id' => $id])->get();

        Keranjang::where(['session_id' => $token, 'product_id' => $id])->update([
            'total_harga' => $cart[0]->total_harga + $product[0]->harga,
            'kuantitas' => $cart[0]->kuantitas + 1
        ]);
        Produk::where('id', $id)->decrement('stok', 1);
        return redirect('/checkout');
    }

    public function minus(Request $request)
    {
        $id = $request->get('id');
        $token = $request->session()->token();
        $token = csrf_token();
        $product = Produk::where('id', $id)->get();
        $cart = Keranjang::where(['session_id' => $token, 'product_id' => $id])->get();

        Keranjang::where(['session_id' => $token, 'product_id' => $id])->update([
            'total_harga' => $cart[0]->total_harga - $product[0]->harga,
            'kuantitas' => $cart[0]->kuantitas - 1
        ]);
        Produk::where('id', $id)->increment('stok', 1);
        return redirect('/checkout');
    }

    public function cart(Request $request)
    {
        $id = $request->get('id');

        $token = $request->session()->token();
        $token = csrf_token();
        if($id){
            $cart = Keranjang::where(['session_id' => $token])->get();
            $product = Produk::where('id', $id)->get();
            if($product == null){
                return abort(404);
            }
            if(Keranjang::where('session_id', $token)->first()){
                $entryCart = Keranjang::where(['session_id' => $token, 'product_id' => $id])->update([
                    'total_harga' => $cart[0]->total_harga + $product[0]->harga,
                    'kuantitas' => $cart[0]->kuantitas + 1
                ]);
                if (! $entryCart ) {
                    Keranjang::create([
                        'session_id' => $token,
                        'product_id' => $id,
                        'kuantitas' => 1,
                        'total_harga' => $product[0]->harga,
                        'product_name' => $product[0]->nama_produk
                    ]);
                    Produk::where('id', $id)->decrement('stok', 1);
                } else {
                    $entryCart;
                    Produk::where(['id' => $id])->decrement('stok', 1);
                }
            } else {
                Keranjang::create([
                    'session_id' => $token,
                    'product_id' => $id,
                    'kuantitas' => 1,
                    'total_harga' => $product[0]->harga,
                    'product_name' => $product[0]->nama_produk
                ]);
                Produk::where('id', $id)->decrement('stok', 1);
            }
        }
        $keranjang = Keranjang::join('produks', 'carts.product_id', '=', 'produks.id')
        ->where(['session_id' => $token])
        ->get();
        $sum = Keranjang::where('session_id', $token)->sum('total_harga');
        return view('user/pages/checkout', compact('keranjang', 'sum'));
    }

    public function delete(Request $request)
    {
        $id = $request->get('id');

        $token = $request->session()->token();
        $token = csrf_token();

        $cart = Keranjang::where(['session_id' => $token, 'product_id' => $id])->get();
        Produk::where('id', $id)->increment('stok', $cart[0]->kuantitas);

        Keranjang::where(['session_id' =>  $token, 'product_id' => $id])->delete();

        return redirect('/checkout');
    }

    public function checkout(Request $request){
        // $id = $request->get('id');
        $token = $request->session()->token();
        $token = csrf_token();
        $sum = Keranjang::where('session_id', $token)->sum('total_harga');
        $keranjang = Keranjang::join('produks', 'carts.product_id', '=', 'produks.id')
        ->where(['session_id' => $token])
        ->select('produks.nama_produk', 'carts.kuantitas')
        ->get();

        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        History::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'catatan' => $request->catatan,
            'total' => $sum,
            'session_id' => $token
        ]);

        $orderProduct = $keranjang;
        $next = '%0D%0A';
        // $stringProduct = implode("%0D%0A", $orderProduct);

        $order = 'Hi Admin, Saya '.$request->nama.' ingin membeli : '.$orderProduct.$next.'dikirim ke '.$request->alamat.$next.'dengan catatan '.$request->catatan.$next.'total yang harus dibayar '.$sum;

        return redirect('https://wa.me/6281259183075?text='.$order);
    }
<<<<<<< HEAD
=======

// end
>>>>>>> 4686355aa8dcf8c667d48bd37742b1b52658a6dd
}
