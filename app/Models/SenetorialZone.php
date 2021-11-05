<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenetorialZone extends BaseModel
{
    use HasFactory;

    public function senetorialZoneLgas()
    {
        return $this->hasMany(SenetorialZoneLga::class);
    }
}
