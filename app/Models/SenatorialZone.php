<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenatorialZone extends BaseModel
{
    use HasFactory;

    public function senatorialZoneLgas()
    {
        return $this->hasMany(SenatorialZoneLga::class);
    }

    public function wards()
    {
        $wardCounts = 0;

        foreach ($this->senatorialZoneLgas as $senatorialZoneLga) {
            
            $wardCounts = $wardCounts + count($senatorialZoneLga->lga->wards);
        }
        return $wardCounts;
    }

    public function pollingUnits()
    {
        $pollingUnitCounts = 0;

        foreach ($this->senatorialZoneLgas as $senatorialZoneLga) {
            
            $pollingUnitCounts = $pollingUnitCounts + $senatorialZoneLga->lga->pollingUnits();
        }
        return $pollingUnitCounts;
    }
}
