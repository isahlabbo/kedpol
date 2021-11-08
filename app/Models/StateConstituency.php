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
}
