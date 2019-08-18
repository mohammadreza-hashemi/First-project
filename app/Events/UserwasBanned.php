<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;//redis vs pusher
use App\User;


//وقتی ایونت فایر شد یکی از اون درایورا اجراشه(redis vs pusher)
class UserwasBanned extends Event implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;//trate

    /**
     * Create a new event instance.
     *
     * @return void
     */
    
    public $user;
    public function __construct(User $user)
    {
        $this->user=$user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
//        return 'done!';
        return new PrivateChannel('channel-name');
    }
}
