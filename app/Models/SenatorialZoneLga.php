<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenatorialZoneLga extends BaseModel
{
    use HasFactory;

    public function senatorialZone()
    {
        return $this->belongsTo(SenatorialZone::class);
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }
}
