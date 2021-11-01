<?php

namespace App\Models;

use App\Models\BaseModel;

class PollingUnit extends BaseModel
{

    public function ward()
    {
    	return $this->belongsTo(Ward::class);
    }

    public function users()
    {
    	return $this->hasMany(User::class);
    }

    public function getNewMemberCode()
    {
    	$code = $this->ward->lga->code
                .$this->ward->code
                .$this->code
                .$this->formatCount(count($this->users)+1);
        return $code;
    }
        
    

    public function formatCount($count)
    {
        if($count < 10){
            $count = '000'.$count;
        }else if($count < 100){
            $count = '00'.$count;
        }else if($count > 1000){
            $count = '0'.$count;
        }
        return $count;
    }
}
