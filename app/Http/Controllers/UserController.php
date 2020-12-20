<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User(){
        return view('admin/user/tbl_user');
    }
    public function UserAdd(){
        return view('admin/user/add_user');
    }
    public function UserEdit(){
        return view('admin/user/edit_user');
    }


}
