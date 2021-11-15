<?php

namespace App\Events\Core;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class MemberRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    protected $member = null;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->member = $user;
        $this->updateFederalConstituencyMemeberCount();
        $this->updateLgaMemeberCount();
        $this->updateSenatorialZoneMemeberCount();
        $this->updateStateConstituencyMemeberCount();
        $this->updateWardMemeberCount();
    }

    public function updateSenatorialZoneMemeberCount(Type $var = null)
    {
        $senatorialZone = $this->member->pollingUnit->senatorialZone();
        $senatorialZone->update(['members'=>$senatorialZone->members + 1]);
    }

    public function updateFederalConstituencyMemeberCount()
    {
        $federalConstituency = $this->member->pollingUnit->federalConstituency();
        $federalConstituency->update(['members'=>$federalConstituency->members + 1]);
    }

    public function updateStateConstituencyMemeberCount()
    {
        $stateConstituency = $this->member->pollingUnit->stateConstituency();
        $stateConstituency->update(['members'=>$stateConstituency->members + 1]);
    }

    public function updateLgaMemeberCount(Type $var = null)
    {
        $lga = $this->member->pollingUnit->lga();
        $lga->update(['members'=>$lga->members + 1]);
    }

    public function updateWardMemeberCount(Type $var = null)
    {
        $ward = $this->member->pollingUnit->ward;
        $ward->update(['members'=>$ward->members + 1]);
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
