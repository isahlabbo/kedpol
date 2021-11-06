<?php

namespace App\Http\Controllers\FederalConstituency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lga;

class WardController extends Controller
{
    public function index($lgaId)
    {
       return view('federalConstituency.lga.ward.index',['lga'=>Lga::find($lgaId)]);
    }
}
