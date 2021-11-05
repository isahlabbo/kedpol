<?php

namespace App\Models;

use App\Models\BaseModel;

class Lga extends BaseModel
{
    public function wards()
    {
    	return $this->hasMany(Ward::class);
    }

    public function federalConstituencyLga()
    {
        return $this->belongsTo(FederalConstituencyLga::class);
    }

    public function senetorialZoneLga()
    {
        return $this->belongsTo(SenetorialZoneLga::class);
    }

    public function slug()
    {
        return strtolower(str_replace(' ','-',$this->name));
    }

    public function pollingUnits()
    {
        $count = 0;
        foreach ($this->wards as $ward) {
            $count = $count + count($ward->pollingUnits);
        }
        return $count;
    }
}
