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
    
    public function wards()
    {
        $wards = [];
        foreach ($this->federalConstituencyLgas as $federalConstituencyLga) {
            foreach($federalConstituencyLga->lga->wards as $ward){
                $wards[] = $ward;
            }
        }
        return $wards;
    }

    public function pollingUnits()
    {
        $pollingUnits = [];
        foreach ($this->federalConstituencyLgas as $federalConstituencyLga) {
            foreach($federalConstituencyLga->lga->wards as $ward){
                foreach ($ward->pollingUnits as $pollingUnit) {
                    $pollingUnits[] = $pollingUnit;
                }
            }
        }
        return $pollingUnits;
    }

    public function members()
    {
        $members = [];
        foreach($this->pollingUnits() as $pollingUnit){
            foreach($pollingUnit->users as $member){
               $members[] = $member;
            }
        }
        return $members;
    }
}
