<?php

namespace App\Models;

use App\Models\BaseModel;

class Lga extends BaseModel
{
    public function wards()
    {
    	return $this->hasMany(Ward::class);
    }
}
