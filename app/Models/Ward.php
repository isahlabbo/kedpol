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

    public function stateConstituencyWards()
    {
        return $this->hasMany(StateConstituencyWard::class);
    }

    public function slug()
    {
        return strtolower(str_replace(' ','-',$this->name));
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
