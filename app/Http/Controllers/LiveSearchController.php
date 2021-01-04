<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveSearchController extends Controller
{
    public function action(Request $request){
        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != ''){
                $product = Product::orderBy('product_name', 'asc')
                    ->where('product_name', 'LIKE', '%'.$query.'%')
                    ->get();
            }else{
                $product = Product::orderBy('product_name', 'asc')
                    ->get();
            }

            $total_row = $product->count();
            if($total_row > 0){
                foreach($product as $p){
                    $output .=
                    '
                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a ><img src="{{ url('/images/'.$p->photo) }}" alt=" " class="img-responsive" /></a>
                                                <p>{{$p -> product_name}}</p>
                                                <h4>Rp. {{$p -> price}}</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <a href={{url("/checkout?id=".$p -> id)}} class="btn-produk">Pesan</a>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }else{
                $output =
                '
                    <h5> Product not found </h5>
                ';
            }
            $product = array(
                'product_data' => $output,
                'product_total' => $total_row
            );

            echo json_encode($data);
        }
    }
}
