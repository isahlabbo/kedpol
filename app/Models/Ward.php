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
}
