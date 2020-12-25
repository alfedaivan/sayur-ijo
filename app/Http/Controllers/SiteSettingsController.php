<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;

class SiteSettingsController extends Controller
{
    public function SiteSettings(){
	$site = Site::all();
        return view('admin/site/edit_site',['site' => $site]);
    }

    public function CategoryEditValidation($id, Request $request){
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

	Site::where($id)->update($form_data);
        return redirect('dashboard/settings')->with('success', 'Site updated succesfully.');
    }
}
