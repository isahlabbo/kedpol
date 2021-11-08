<?php

namespace App\Http\Controllers\StateConstituency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ward;

class PollingUnitController extends Controller
{
    public function index($wardId)
    {
        return view('stateConstituency.ward.pollingUnit.index',['ward'=>Ward::find($wardId)]);
    }

}
