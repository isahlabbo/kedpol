<?php

namespace App\Events\Core;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Ward;

class WardRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $ward = null;
    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct(Ward $ward)
    {
        $this->ward = $ward;
        $this->updateFederalContituencyWardCount();
        $this->updateSenatorialZoneWardCount();
        
    }

    protected function updateFederalContituencyWardCount(Type $var = null)
    {
        $federalConstituency = $this->ward->federalConstituency();
        
        $federalConstituency->update(['wards'=>$federalConstituency->wards + 1]);
    }

    protected function updateSenatorialZoneWardCount(Type $var = null)
    {
        $senatorialZone = $this->ward->senatorialZone();
        $senatorialZone->update(['wards'=>$senatorialZone->wards + 1]);
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
