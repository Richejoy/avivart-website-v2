<?php

namespace App\Listeners;

use App\Events\NewsletterEvent;
use App\Mail\NewsletterMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Log;

class NewsletterListener
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
     * @param  NewsletterEvent  $event
     * @return void
     */
    public function handle(NewsletterEvent $event)
    {
        $newsletter = $event->newsletter;

        extract($event->params);

        switch ($action) {
            case 'subscribe':

                try {
                    Mail::to($newsletter->email)->send(new NewsletterMail($newsletter, 'subscribe_user', "Newsletter Mail"));
                        
                    //Mail::to(Helper::EMAIL_INFO, config('app.name', 'Laravel'))->send(new NewsletterMail($newsletter, 'subscribe_admin', "Newsletter Mail", [], ['address' => $newsletter->email]));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            case 'unsubscribe':

                try {
                    Mail::to($newsletter->email)->send(new NewsletterMail($newsletter, 'unsubscribe_user', "Newsletter Mail"));
                    
                    //Mail::to(Helper::EMAIL_INFO, config('app.name', 'Laravel'))->send(new NewsletterMail($newsletter, 'unsubscribe_admin', "Newsletter Mail", [], ['address' => $newsletter->email]));
                } catch (\Exception $ex) {
                    Log::error('Unable to send mail', [
                        'exception' => $ex,
                    ]);
                }

                break;

            default:
                # code...
                break;
        }
    }
}
