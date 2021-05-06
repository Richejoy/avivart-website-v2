<?php

namespace App\Events;

use App\Models\Newsletter;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewsletterEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $newsletter;

    public $params;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Newsletter $newsletter, array $params = [])
    {
        $this->newsletter = $newsletter;

        $this->params = $params;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
