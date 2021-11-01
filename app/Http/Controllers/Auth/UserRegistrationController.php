<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lga;
use Illuminate\Auth\Events\Registered;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\RegisterResponse;

class UserRegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register',['lgas'=>Lga::all()]);
    }

    public function store(Request $request, CreatesNewUsers $creator): RegisterResponse
    {
        event(new Registered($user = $creator->create($request->all())));

        $this->guard->login($user);

        return app(RegisterResponse::class);
    }
}
