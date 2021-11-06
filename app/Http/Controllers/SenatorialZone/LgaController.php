<?php

namespace App\Http\Controllers\SenatorialZone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SenatorialZone;

class LgaController extends Controller
{
    public function index($senatorialZoneId)
    {
       return view('senatorialZone.lga.index',['zone'=>SenatorialZone::find($senatorialZoneId)]);
    }
}
