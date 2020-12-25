<?php

namespace App\Http\Controllers;

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
    public function Product(){
        $site = Site::all();
        return view('user/pages/product',compact('site'));
    }
    // page checkout
    public function Checkout(){
        $site = Site::all();
        return view('user/pages/checkout',compact('site'));
    }
    // page login
    public function Login(){
        return view('login/loginPage');
    }

// end
}
