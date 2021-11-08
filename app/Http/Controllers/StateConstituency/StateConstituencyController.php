<?php

namespace App\Http\Controllers\StateConstituency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StateConstituency;

class StateConstituencyController extends Controller
{
    public function index()
    {
       return view('stateConstituency.index',['stateConstituencies'=>StateConstituency::all()]);
    }
}
