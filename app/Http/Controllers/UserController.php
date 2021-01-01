<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function User(){
        $user = User::all();
        return view('admin/user/tbl_user', compact('user'));
    }
    public function UserAdd(){
        return view('admin/user/add_user');
    }
    public function UserAddValidation(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/dashboard/user');
    }
    public function UserEdit(){
        return view('admin/user/edit_user');
    }


}
