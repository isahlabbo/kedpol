<?php

namespace App\Events\Core;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\PollingUnit;

class PollingUnitRegistered
{
    protected $pollingUnit = null;

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PollingUnit $pollingUnit)
    {
        $this->pollingUnit = $pollingUnit;
        $this->updateFederalConstituencyPollingUnitCount();
        $this->updateLgaPollingUnitCount();
        $this->updateSenatorialZonePollingUnitCount();
        $this->updateStateConstituencyPollingUnitCount();
    }
    
    protected function updateSenatorialZonePollingUnitCount()
    {
        $senatorialZone = $this->pollingUnit->senatorialZone();
        $senatorialZone->update(['polling_units'=>$senatorialZone->polling_units + 1]);
    }

    protected function updateFederalConstituencyPollingUnitCount()
    {
        $federalConstituency = $this->pollingUnit->federalConstituency();
        $federalConstituency->update(['polling_units'=>$federalConstituency->polling_units + 1]);
    }

    protected function updateStateConstituencyPollingUnitCount()
    {
        $stateConstituency = $this->pollingUnit->stateConstituency();
        $stateConstituency->update(['polling_units'=>$stateConstituency->polling_units + 1]);
    }

    protected function updateLgaPollingUnitCount()
    {
        $lga = $this->pollingUnit->lga();
        $lga->update(['polling_units'=>$lga->polling_units + 1]);
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
