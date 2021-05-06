<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $view;

    public $user;

    public $params;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, string $view, string $subject, array $params = array(), array $from = array())
    {
        $this->user = $user;
        $this->view = $view;
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
        return $this->view('emails.html.users.' . $this->view);
    }
}
