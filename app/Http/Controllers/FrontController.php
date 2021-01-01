<?php

namespace App\Http\Controllers;

use App\Models\histories;
use App\Models\History;
use App\Models\Cart;
use App\Models\Product;
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
        $product = Product::orderBy('products.product_name', 'asc')
        ->paginate(16);
        $site = Site::all();
        return view('user/pages/product', compact('product', 'site'));
    }
    // page checkout

    public function plus(Request $request)
    {
        $id = $request->get('id');
        $token = $request->session()->token();
        $token = csrf_token();
        $product = Product::where('id', $id)->get();
        $cart = Cart::where(['session_id' => $token, 'product_id' => $id])->get();

        Cart::where(['session_id' => $token, 'product_id' => $id])->update([
            'total_price' => $cart[0]->total_price + $product[0]->price,
            'quantity' => $cart[0]->quantity + 1
        ]);
        Product::where('id', $id)->decrement('stock', 1);
        return redirect('/checkout');
    }

    public function minus(Request $request)
    {
        $id = $request->get('id');
        $token = $request->session()->token();
        $token = csrf_token();
        $product = Product::where('id', $id)->get();
        $cart = Cart::where(['session_id' => $token, 'product_id' => $id])->get();

        Cart::where(['session_id' => $token, 'product_id' => $id])->update([
            'total_price' => $cart[0]->total_price - $product[0]->price,
            'quantity' => $cart[0]->quantity - 1
        ]);
        Product::where('id', $id)->increment('stock', 1);
        return redirect('/checkout');
    }

    public function cart(Request $request)
    {
        $site = Site::all();
        $id = $request->get('id');

        $token = $request->session()->token();
        $token = csrf_token();
        if($id){
            $cart = Cart::where(['session_id' => $token])->get();
            $product = Product::where('id', $id)->get();
            if($product == null){
                return abort(404);
            }
            if(Cart::where('session_id', $token)->first()){
                $entryCart = Cart::where(['session_id' => $token, 'product_id' => $id])->update([
                    'total_price' => $cart[0]->total_price + $product[0]->price,
                    'quantity' => $cart[0]->quantity + 1
                ]);
                if (! $entryCart ) {
                    Cart::create([
                        'session_id' => $token,
                        'product_id' => $id,
                        'quantity' => 1,
                        'total_price' => $product[0]->price,
                        'product_name' => $product[0]->product_name
                    ]);
                    Product::where('id', $id)->decrement('stock', 1);
                } else {
                    $entryCart;
                    Product::where(['id' => $id])->decrement('stock', 1);
                }
            } else {
                Cart::create([
                    'session_id' => $token,
                    'product_id' => $id,
                    'quantity' => 1,
                    'total_price' => $product[0]->price,
                    'product_name' => $product[0]->product_name
                ]);
                Product::where('id', $id)->decrement('stock', 1);
            }
        }
        $keranjang = Cart::join('products', 'carts.product_id', '=', 'products.id')
        ->where(['session_id' => $token])
        ->get();
        $sum = Cart::where('session_id', $token)->sum('total_price');
        return view('user/pages/checkout', compact('keranjang', 'sum', 'site'));
    }

    public function delete(Request $request)
    {
        $id = $request->get('id');

        $token = $request->session()->token();
        $token = csrf_token();

        $cart = Cart::where(['session_id' => $token, 'product_id' => $id])->get();
        Product::where('id', $id)->increment('stock', $cart[0]->quantity);

        Cart::where(['session_id' =>  $token, 'product_id' => $id])->delete();

        return redirect('/checkout');
    }

    public function checkout(Request $request){
        // $id = $request->get('id');
        $token = $request->session()->token();
        $token = csrf_token();
        $sum = Cart::where('session_id', $token)->sum('total_price');
        $keranjang = Cart::join('products', 'carts.product_id', '=', 'products.id')
        ->where(['session_id' => $token])
        ->select('products.product_name', 'carts.quantity')
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
}
