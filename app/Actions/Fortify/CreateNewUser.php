<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\PollingUnit;
use App\Events\Core\MemberRegistered;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15', 'unique:users'],
            'nin' => ['required', 'string', 'max:15', 'unique:users'],
            'polling_unit' => ['required'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

       

        return DB::transaction(function () use ($input) {
            return tap(User::create([
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
                $this->createTeam($user);
                $user->userRoles()->create(['role_id'=>5]);
                event(new MemberRegistered($user));
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
