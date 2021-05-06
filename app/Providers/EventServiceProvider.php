<?php

namespace App\Providers;

use App\Events\ContactEvent;
use App\Events\NewsletterEvent;
use App\Events\UserEvent;
use App\Listeners\ContactListener;
use App\Listeners\NewsletterListener;
use App\Listeners\UserListener;
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

        ContactEvent::class => [
            ContactListener::class,
        ],

        NewsletterEvent::class => [
            NewsletterListener::class,
        ],

        UserEvent::class => [
            UserListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
