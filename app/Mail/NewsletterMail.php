<?php

namespace App\Mail;

use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $view;

    public $newsletter;

    public $params;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Newsletter $newsletter, string $view, string $subject, array $params = array(), array $from = array())
    {
        $this->view = $view;
        $this->newsletter = $newsletter;
        $this->params = $params;

        $this->subject($subject);
        $this->from($from);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.html.newsletters.' . $this->view);
    }
}
