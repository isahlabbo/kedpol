<?php

namespace App\Http\Controllers\SenatorialZone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SenatorialZone;

class SenatorialZoneController extends Controller
{
    public function index()
    {
       return view('senatorialZone.index',['zones'=>SenatorialZone::all()]);
    }
}
