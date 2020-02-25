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
          return redirect()->back()
          ->with('start_index_error','The start index must be less than End index')
          ->withInput();
      }
      $result = \DB::table('room_models')->whereBetween('room_id',[$start,$stop])->get();
    //   dd(count($result));
      if(count($result)!=0){
        return redirect()->back()
        ->with('room_exists','Some Rooms May Exists try updating them or deleting them')
        ->withInput(); 
      }

      for ($i=$start; $i<$stop ; $i++) { 
          \DB::table('room_models')->insert([
            'room_id'=>$i,
            'room_strength'=>$capacity,
            'category'=>$category,
            'room_facilities'=>$facility
          ]);
      }
      return redirect()->back()
        ->with('success','Room creation Successful');
    }
}
