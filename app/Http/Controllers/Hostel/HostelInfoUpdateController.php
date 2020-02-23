<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelInfoUpdateController extends Controller
{
    public function getHostelUpdatePage(){
        return view('hostel.UpdateHostelInfo');
    }
    public function updateHostel(Request $request){
        $id = \session()->has("u_id") ? \session('u_id') : 0;
        if($id == 0){return redirect('/');}

        $hname = $request->input('h-name');
        $haddress = $request->input('h-address');
        $hcategory = $request->input('h-category');
        $hdescription = $request->input('h-description');
        $hcontact = $request->input('h-contact');
        $hemail = $request->input('h-email');

        \DB::table('hostel_information_models')
        ->where('hostel_id','=',$id)
        ->update(
            ['hostel_name'=>$hname],
            ['hostel_address'=>$haddress],
            ['category'=>$hcategory],
            ['description'=>$hdescription],
            ['hostel_contact'=>$hcontact],
            ['hostel_mail'=>$hemail]
        );
        
        \session(['hname'=>$hname]);
        return redirect(\route("showHostel"));
    }
}
