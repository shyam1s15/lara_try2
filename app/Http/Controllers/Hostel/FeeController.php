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
        $ER = $request->input('stu-er');
        $name = $request->input('stu-name');
        $feeAmt = $request->input('stu-fee-amount');
        $feeReceived = $request->input('stu-fee-submit-date');
        $due = $request->input('stu-fee-due-date');
        
        

    }
}
