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

    }
}
