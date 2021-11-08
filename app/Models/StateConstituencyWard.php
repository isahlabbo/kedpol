<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateConstituencyWard extends Model
{
    use HasFactory;

    public function StateConstituency()
    {
        return $this->belongsTo(StateConstituency::class);
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

}
