<?php

namespace App\Http\Controllers\SenatorialZone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ward;

class PollingUnitController extends Controller
{
    public function index($wardId)
    {
        return view('senatorialZone.lga.ward.pollingUnit.index',['ward'=>Ward::find($wardId)]);
    }

}
