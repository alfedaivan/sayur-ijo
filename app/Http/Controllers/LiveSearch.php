<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LiveSearch extends Controller
{
    // public function action(Request $request){
    //     if($request->ajax()){
    //         $output='';
    //         $query = $request->get('query');
    //         if($query != ''){
    //             $product = Product::orderBY('product_name', 'asc')
    //                 ->where('product_name', 'LIKE', '%'.$query.'%')->get();
    //         }else{
    //             $product = Product::orderBy('product_name', 'asc')->get();
    //         }
    //         $total
    //     }
    // }
}
