<?php

namespace App\Http\Controllers\FederalConstituency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FederalConstituency;

class FederalConstituencyController extends Controller
{
    public function index()
    {
       return view('federalConstituency.index',['federalConstituencies'=>FederalConstituency::all()]);
    }
}
