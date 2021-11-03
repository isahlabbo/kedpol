<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PollingUnit;

class PollingUnitController extends Controller
{
    public function index($pollingUnitId)
    {
        return view('government.lga.ward.pollingUnit.index',['pollingUnit'=>PollingUnit::find($pollingUnitId)]);
    }

}
