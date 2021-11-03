<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lga;

class GovernmentController extends Controller
{
    public function index()
    {
       return view('government.index',['lgas'=>Lga::all()]);
    }
}
