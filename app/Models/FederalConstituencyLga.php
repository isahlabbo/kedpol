<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FederalConstituencyLga extends BaseModel
{
    use HasFactory;

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }
    public function federalConstituency()
    {
        return $this->belongsTo(FederalConstituency::class);
    }
}
