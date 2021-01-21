<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function User(Request $request){
        $user = User::all();
        return view('admin/user/tbl_user', compact('user'));
    }

    public function UserAdd(){
        return view('admin/user/add_user');
    }

    public function UserAddValidation(Request $request){
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('dashboard/user')->with('success', 'User berhasil ditambahkan.');
    }

    // public function UserEdit($id){
    //     $user = User::find($id);
    //     return view('admin/user/edit_user',['user' => $user]);
    // }
    // public function UserEditValidation($id, Request $request){
    //     $this->validate($request,[
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);

    //     $user= User::find($id);
    //     $user->name = $request['name'];
    //     $user->email = $request['email'];
    //     $user->password =  Hash::make($request['password']);
    //     $user->save();
    //     return redirect('dashboard/user')->with('success', 'User berhasil diedit.');
    // }


    public function UserDelete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('dashboard/user')->with('success', 'User berhasil dihapus.');
    }



}
