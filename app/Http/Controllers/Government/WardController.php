<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ward;

class WardController extends Controller
{
    public function index($wardId)
    {
       return view('government.lga.ward.index',['ward'=>Ward::find($wardId)]);
    }
}
