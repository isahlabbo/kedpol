<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenetorialZoneLga extends BaseModel
{
    use HasFactory;

    public function senetorialZone()
    {
        return $this->belongsTo(SenetorialZone::class);
    }
}
