<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class availableRoomController extends Controller
{
    //
    public function createAvailableRoom(){
        return view('hostel.room.availableRoom');
    }
    public function storeAvailableRoom(){

    }
}
