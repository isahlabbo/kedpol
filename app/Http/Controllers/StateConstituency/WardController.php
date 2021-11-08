<?php

namespace App\Http\Controllers\StateConstituency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StateConstituency;

class WardController extends Controller
{
    public function index($stateConstituencyId)
    {
       return view('stateConstituency.ward.index',['stateConstituency'=>StateConstituency::find($stateConstituencyId)]);
    }
}
