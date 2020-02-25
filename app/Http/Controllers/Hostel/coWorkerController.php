<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class coWorkerController extends Controller
{
    //
    public function createCoworker(){
        return view("hostel.addCoworker");
    }
    public function storeCoworker(){
        // bakrichor??
    }
}
