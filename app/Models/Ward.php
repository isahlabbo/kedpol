<?php

namespace App\Models;

use App\Models\BaseModel;

class Ward extends BaseModel
{
    public function pollingUnits()
    {
    	return $this->hasMany(PollingUnit::class);
    }

    public function lga()
    {
    	return $this->belongsTo(Lga::class);
    }

    public function stateConstituencyWard()
    {
        return $this->hasOne(StateConstituencyWard::class);
    }

    public function slug()
    {
        return strtolower(str_replace(' ','-',$this->name));
    }
    
    public function federalConstituency()
    {
        return $this->lga->federalConstituencyLga->federalConstituency;
    }

    public function senatorialZone()
    {
        return $this->lga->senatorialZoneLga->senatorialZone;
    }

    public function members()
    {
        $members = [];
        foreach ($this->pollingUnits as $pollingUnit) {
            foreach($pollingUnit->users as $user){
                $members[] = $user;
            }
        }
        return $members;

    }
}
