<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

// change pages controller
    //page home
    public function Index(){
        return view('user/home');
    }
    //page product
    public function Product(){
        return view('user/product');
    }
    // page checkout
    public function Checkout(){
        return view('user/checkout');
    }
    // page login
    public function Login(){
        return view('login/loginPage');
    }
// end


}
