<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;

class SiteSettingsController extends Controller
{
	public function index(){
		$site = Site::all();
		return view('admin/site/tbl_site',compact('site'));
	}

    public function SiteSettings($id){
		$site=Site::findOrFail($id);
        return view('admin/site/edit_site',compact('site'));
    }

    public function SiteEditValidation($id, Request $request){
        $this->validate($request,[
        'facebook' => 'required',
	    'twitter' => 'required',
	    'email' => 'required',
	    'instagram' => 'required',
	    'nomor_wa' => 'required',
	    'alamat' => 'required',
	    'about' => 'required',
        ]);

	$form_data = array(
	    'facebook' => $request->facebook,
	    'twitter' => $request->twitter,
	    'email' => $request->email,
	    'instagram' => $request->instagram,
	    'nomor_wa' => $request->nomor_wa,
	    'alamat' => $request->alamat,
	    'about' => $request->about,
	);

	Site::where('id',$id)->update($form_data);
        return redirect('dashboard/settings')->with('success', 'Site updated succesfully.');
    }
}
