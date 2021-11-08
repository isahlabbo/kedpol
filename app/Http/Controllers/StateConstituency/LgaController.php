<?php

namespace App\Http\Controllers\FederalConstituency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FederalConstituency;

class LgaController extends Controller
{
    public function index($federalConstituencyId)
    {
       return view('federalConstituency.lga.index',['federalConstituency'=>FederalConstituency::find($federalConstituencyId)]);
    }
}
