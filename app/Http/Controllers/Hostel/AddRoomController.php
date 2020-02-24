<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddRoomController extends Controller
{
    public function getAddRoomPage(){
        return view('hostel.room.addrooms');
    }

    public function storeRoom(Request $request){
      $start = $request->input('start-room');
      $stop =   $request->input('end-room');   
      $capacity =  $request->input('total-capacity');   
      $category =  $request->input('category');   
      $facility = $request->input('facilities');   

      if($stop < $start){
          return back()->withInput()
          ->with('start_index_error','The start index must be less than End index');
      }
      $data = $request->session()->all();
      print_r($data);
      dd();
    }
}
