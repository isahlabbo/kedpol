<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lga;

class LgaController extends Controller
{
    public function index($lgaId)
    {
       return view('government.lga.index',['lga'=>Lga::find($lgaId)]);
    }
}
