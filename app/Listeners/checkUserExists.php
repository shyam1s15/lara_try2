<?php

namespace App\Listeners;

use App\Events\saveLoginDetails;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class checkUserExists
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
        $name = $event->user->getName();
        $email = $event->user->getEmail();
        $ans = \DB::table('s_users')->where('sUsers_email','=',$email)->get();
        $event->user_exists = sizeof($ans) == 0 ? 0  :  1;    
        // echo sizeof($ans) == 0 ? 0  :   1;    
        return 0;
    }
}
