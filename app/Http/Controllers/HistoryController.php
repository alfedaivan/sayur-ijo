<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function History(Request $request ){
        $histories = History::orderBy('nama', 'desc')
        ->where(function($query) use ($request){
            $query->where('nama', 'LIKE', '%'.$request->search.'%')
                  ->orWhere('alamat', 'LIKE', '%'.$request->search.'%')
                  ->orWhere('created_at', 'LIKE', '%'.$request->search.'%')
                  ->get();
        })
        ->paginate(25);
        return view('admin/history/tbl_history', ['histories' => $histories]);
    }

    public function HistoryDelete($id){
        $histories = History::findOrFail($id);
        $histories->delete();
        return redirect('dashboard/history')->with('success', 'Riwayat pemesanan berhasil dihapus');
    }

}
