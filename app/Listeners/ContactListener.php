<?php

namespace App\Listeners;

use App\Events\ContactEvent;
use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Log;

class ContactListener
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
     * @param  ContactEvent  $event
     * @return void
     */
    public function handle(ContactEvent $event)
    {
        $contact = $event->contact;

        try {
            Mail::to($contact->email, $contact->fullName())->send(new ContactMail($contact, 'user', "Contact Mail"));

            //Mail::to(Helper::EMAIL_INFO, config('app.name', 'Laravel'))->send(new ContactMail($contact, 'admin', "Contact Mail", [], ['address' => $contact->email, 'name' => $contact->fullName()]));
        } catch (\Exception $ex) {
            Log::error('Unable to send mail', [
                'exception' => $ex,
            ]);
        }
    }
}
