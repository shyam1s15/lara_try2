<?php

namespace App\Listeners;

use App\Events\saveLoginDetails;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
            return 0;
        }
        \DB::insert('insert into s_users (sUsers_name, sUsers_email) values (?, ?)'
        , [$event->user->getName(), $event->user->getEmail()]);
        // dd("record inserted successfully");
        return 0;
    }
}
