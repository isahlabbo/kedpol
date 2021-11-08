<?php

namespace App\Http\Controllers\StateConstituency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lga;
use App\Models\PollingUnit;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PollingUnitMemberController extends Controller
{

    public function index($wardId,$pollingUnitId)
    {
        return view('stateConstituency.ward.pollingUnit.member.index',['pollingUnit'=>PollingUnit::find($pollingUnitId)]);
    }

    public function create($wardId,$pollingUnitId)
    {
        return view('stateConstituency.ward.pollingUnit.member.create',['lgas'=>Lga::all(),'pollingUnit'=>PollingUnit::find($pollingUnitId)]);
    }

    public function edit($wardId,$pollingUnit,$userId)
    {
        return view('stateConstituency.ward.pollingUnit.member.edit',['member'=>User::find($userId)]);
    }

    public function register(Request $request, $wardId,$pollingUnitId)
    {
        
        $input = $request->all();
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15', 'unique:users'],
            'nin' => ['required', 'string', 'max:15', 'unique:users'],
        ])->validate();

        DB::transaction(function () use ($input) {
             tap(User::create([
                'name' => $input['name'],
                'phone' => $input['phone'],
                'polling_unit_id' => $input['polling_unit'],
                'nin' => $input['nin'],
                'password' => Hash::make($input['nin']),
                'email' => $input['nin'].'@kedpol.com',
            ]), function (User $user) {
                $user->update([
                    'code' => $user->pollingUnit->getNewMemberCode(),
                    ]);
                $user->createTeam();
                $user->userRoles()->create(['role_id'=>5]);
            });
        });

        return redirect()->route('state-constituency.ward.polling-unit.member.index',[Ward::find($wardId)->stateConstituencyWard->stateConstituency->id,$pollingUnitId]);
    }

    public function update(Request $request, $constituencyId, $pollingUnitId, $memberId)
    {
        
        $input = $request->all();
        $user = User::find($memberId);
        $roles = ['name' => ['required', 'string', 'max:255']];
        
        if($request->phone != $user->phone){
            $roles['phone'] = ['required', 'string', 'max:15', 'unique:users'];
        }

        if($request->email != $user->email){
            $roles['email'] = ['required', 'string', 'email', 'unique:users'];
        }

        if($request->nin != $user->nin){
            $roles['nin'] = ['required', 'string', 'max:11', 'unique:users'];
        }

        Validator::make($input, $roles)->validate();
        $user->update([
                'name' => $input['name'],
                'phone' => $input['phone'],
                'polling_unit_id' => $input['polling_unit'],
                'nin' => $input['nin'],
                'password' => Hash::make($input['nin']),
                'email' => $input['email']]);
        

        return back();
    }
}
