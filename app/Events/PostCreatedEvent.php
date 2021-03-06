<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PostCreatedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var array
     */
    public $post;


    /**
     * Create a new event instance.
     *
     * @param array $post
     */
    public function __construct(array $post)
    {
        $this->post = $post;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chan-demo');
    }

    public function broadcastAs()
    {
        return 'ws_emit';
    }


    /* Exemple pour filtrer le broacast
    public function broadcastWith(){
        return [
            'titre' => $this->post['name']
        ];
    }
*/
}
