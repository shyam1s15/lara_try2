<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hostelRouteController extends Controller
{
    //
    public function index(){
        return view('hostel.index2Navigator');
    }
}
