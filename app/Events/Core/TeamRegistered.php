<?php

namespace App\Events\Core;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Team;

class TeamRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    protected $team = null;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Team $team)
    {
        $this->team = $team;
        $this->updateFederalConstituencyTeamCount();
        $this->updateLgaTeamCount();
        $this->updateSenatorialZoneTeamCount();
        $this->updateStateConstituencyTeamCount();
        $this->updateWardTeamCount();
    }

    public function updateSenatorialZoneTeamCount(Type $var = null)
    {
        $senatorialZone = $this->team->pollingUnit->senatorialZone();
        $senatorialZone->update(['teams'=>$senatorialZone->teams + 1]);
    }

    public function updateFederalConstituencyTeamCount()
    {
        $federalConstituency = $this->team->pollingUnit->federalConstituency();
        $federalConstituency->update(['teams'=>$federalConstituency->teams + 1]);
    }

    public function updateStateConstituencyTeamCount()
    {
        $stateConstituency = $this->team->pollingUnit->stateConstituency();
        $stateConstituency->update(['teams'=>$stateConstituency->teams + 1]);
    }

    public function updateLgaTeamCount(Type $var = null)
    {
        $lga = $this->team->pollingUnit->lga();
        $lga->update(['teams'=>$lga->teams + 1]);
    }

    public function updateWardTeamCount(Type $var = null)
    {
        $ward = $this->team->pollingUnit->ward;
        $ward->update(['teams'=>$ward->members + 1]);
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
