<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewUserRegistredEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $code;
    public $userIsInvited;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $code, $userIsInvited)
    {
        //
        $this->user = $user;
        $this->code = $code;
        $this->userIsInvited = $userIsInvited;
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
