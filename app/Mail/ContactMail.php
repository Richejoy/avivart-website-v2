<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $view;

    public $contact;

    public $params;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact, string $view, string $subject, array $params = array(), array $from = array())
    {
        $this->view = $view;
        $this->contact = $contact;
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
        return $this->view('emails.html.contacts.' . $this->view);
    }
}
