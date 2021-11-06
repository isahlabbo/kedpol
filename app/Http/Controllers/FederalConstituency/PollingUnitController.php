<?php

namespace App\Http\Controllers\FederalConstituency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ward;

class PollingUnitController extends Controller
{
    public function index($wardId)
    {
        return view('federalConstituency.lga.ward.pollingUnit.index',['ward'=>Ward::find($wardId)]);
    }

}
