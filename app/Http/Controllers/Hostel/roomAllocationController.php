<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class roomAllocationController extends Controller
{
    //
    public function createAllocation(){
        return view('hostel.student.roomalo');
    }
    public function storeAllocation(Request $request){
        $roomNo = $request->input('room-no');
        $ER = $request->input('stu_er');

        $checkRoomExists = \DB::table('room_models')
        ->where('room_id','=',$roomNo)->get();

        if(count($checkRoomExists)==0){
            return redirect()->back()
            ->with('roomNotExists','Please check if that room exists')->withInput();
        }
        $checkUserExists = \DB::table('students_models')
        ->where('stu_er','=',$ER)->get();

        if(count($checkUserExists)==0){
            return redirect()->back()
            ->with('UserNotExists','Please check if Student exists')->withInput();
        }

        $space = \DB::table('room_models')
        ->where('room_id','=',$roomNo)->first();

        if($space->room_strength == 0){
            return redirect()->back()
            ->with('RoomFull','The Room is already full')->withInput();
        }
        $allocated = \DB::table('students_models')
        ->where('room_id','=',$roomNo)->value('allocated');

        if ($allocated != 0){
            return redirect()->back()
            ->with('UserAlreadyAllocated','The Room is already allocated to that user')->withInput();
        }
        // else part
        

    }
}
