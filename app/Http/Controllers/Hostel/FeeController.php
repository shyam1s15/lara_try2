<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    //
    public function createFee(){
        return view('hostel.student.fees');
    }
    public function storeFee(Request $request){
        $request->input('');
        $request->input('');
        $request->input('');
        $request->input('');
    }
}
