<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function User(Request $request){
        $user = User::all();
        return view('admin/user/tbl_user', compact('user'));
    }

    public function UserDelete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('dashboard/user')->with('success', 'User berhasil dihapus.');
    }


}
