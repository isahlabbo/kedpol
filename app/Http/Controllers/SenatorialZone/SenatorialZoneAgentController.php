<?php

namespace App\Http\Controllers\SenatorialZone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SenatorialZone;

class SenatorialZoneAgentController extends Controller
{
    public function create($senatorialZoneId)
    {
        return view('senatorialZone.agent.create',['senatorialZone'=>SenatorialZone::find($senatorialZoneId)]);
    }
}
