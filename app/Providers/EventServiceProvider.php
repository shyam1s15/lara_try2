<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\TheNewGuyEvent' => [
            "App\Listeners\SendWelcomeMailListner",
            "App\Listeners\ShowHimSystemGuideListner",
        ],
        'App\Events\saveLoginDetails'=>[
            "App\Listeners\checkUserExists",
            "App\Listeners\insertUserIfNotExists",
        ],
        'App\Events\sendParentEmail'=>[
            "App\Listeners\prepareDatabase",
            "App\Listeners\sendMail",
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
