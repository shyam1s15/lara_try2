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
        echo $event->user->getName();
        dd("ok => that's Your signature, i know you");   
    }
}
