<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ward;
use App\Models\PollingUnit;

class AjaxController extends Controller
{
    public function getLgaWards($lgaId)
    {
        return response()->json(Ward::where('lga_id',$lgaId)->pluck('name','id'));
    }

    public function getWardPollingUnits($wardId)
    {
        return response()->json(PollingUnit::where(['ward_id'=>$wardId])->pluck('name','id'));
    }
}
