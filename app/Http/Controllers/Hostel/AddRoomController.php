<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddRoomController extends Controller
{
    public function getAddRoomPage(){
        return view('hostel.AddRooms');
    }

    public function insertRoom(Request $request){
        
    }
}
