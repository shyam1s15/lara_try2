<?php

namespace App\Listeners;

use App\Events\saveLoginDetails;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\sUsers;

class insertUserIfNotExists
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  saveLoginDetails  $event
     * @return void
     */
    public function handle(saveLoginDetails $event)
    {
        //
        if($event->user_exists != 0){
            // \redirect("test/hostel");
            // dd("hello");
            \session(['email'=>$event->user->getEmail()]);
            $this->setSessionsOfLoggedUser($event->user->getEmail());
            return 0;
        }
        \DB::insert('insert into s_users (sUsers_name, sUsers_email) values (?, ?)'
        , [$event->user->getName(), $event->user->getEmail()]);
        
        \DB::insert('insert into hostel_information_models (hostel_name) values (?)', ['EasyHostels']);
       
        $this->setSessionsOfLoggedUser($event->user->getEmail());
        // dd("record inserted successfully");
        return 0;
    }

    public function setSessionsOfLoggedUser($email){
        // $id = \DB::select('select sUsers_id from s_users where sUsers_email = ?', [$email]);
        $id = \DB::table('s_users')->where('sUsers_email','=',$email)->value('sUsers_id');
        $hname = sUsers::find($id)->getHostel->first();
        // print_r($id);
        // echo $id[1];
        // dd($id);
        // $hname = \DB::table('s_users')->where('sUsers_id','=',$id)->getHostel();
        \session(['u_id'=>$id]);
        \session(['email'=>$email]);
        \session(['hname'=>$hname->hostel_name]);
        \session()->save();
        // print_r($hname);
        // dd($hname->hostel_name);
        // print_r($hname[0]);
        // foreach($hname as $h=>$n){
        //     echo $h . " " . $n . "<br>";
        // }
        // \typeOf($hname);
        // dd("");
    }
}
