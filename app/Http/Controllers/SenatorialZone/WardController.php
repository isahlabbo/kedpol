<?php

namespace App\Http\Controllers\SenatorialZone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lga;

class WardController extends Controller
{
    public function index($lgaId)
    {
       return view('senatorialZone.lga.ward.index',['lga'=>Lga::find($lgaId)]);
    }
}
