<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FederalConstituency extends BaseModel
{
    use HasFactory;
    
    public function federalConstituencyLgas()
    {
        return $this->hasMany(FederalConstituencyLga::class);
    }
}
