<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateConstituency extends BaseModel
{
    use HasFactory;

    public function stateConstituencyWards()
    {
        return $this->hasMany(StateConstituencyWard::class);
    }
    public function pollingUnits()
    {
        $pollingUnits = [];
        foreach($this->stateConstituencyWards as $statePollingUnitWard){
            foreach ($statePollingUnitWard->ward->pollingUnits as $pollingUnit) {
                $pollingUnits[] = $pollingUnit;
            }
        }
        return $pollingUnits;
    }

    public function members()
    {
        $members = [];
        foreach($this->pollingUnits() as $pollingUnit){
            foreach($pollingUnit->users as $member){
               $members[] = $member;
            }
        }
        return $members;
    }
}
