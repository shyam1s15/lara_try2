<?php

namespace App\Listeners;

use App\Events\TheNewGuyEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ShowHimSystemGuideListner
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
     * @param  TheNewGuyEvent  $event
     * @return void
     */
    public function handle(TheNewGuyEvent $event)
    {
        //
    }
}
