<?php

namespace App\Actions\Jetstream;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Contracts\AddsTeamMembers;
use Laravel\Jetstream\Events\AddingTeamMember;
use Laravel\Jetstream\Events\TeamMemberAdded;
use Laravel\Jetstream\Jetstream;
use Laravel\Jetstream\Rules\Role;

class AddTeamMember implements AddsTeamMembers
{
    /**
     * Add a new team member to the given team.
     *
     * @param  mixed  $user
     * @param  mixed  $team
     * @param  string  $phone
     * @param  string|null  $role
     * @return void
     */
    public function add($user, $team, string $phone, string $role = null)
    {
        
        Gate::forUser($user)->authorize('addTeamMember', $team);

        $this->validate($team, $phone, $role);

        $newTeamMember = Jetstream::findUserByPhoneOrFail($phone);

        $team->users()->attach(
            $newTeamMember, ['role' => $role]
        );

        
    }

    /**
     * Validate the add member operation.
     *
     * @param  mixed  $team
     * @param  string  $phone
     * @param  string|null  $role
     * @return void
     */
    protected function validate($team, string $phone, ?string $role)
    {
        
        Validator::make([
            'phone' => $phone,
            'role' => $role,
        ], $this->rules(), [
            'phone.exists' => __('We were unable to find a registered user with this phone address.'),
        ])->after(
            $this->ensureUserIsNotAlreadyOnTeam($team, $phone)
        )->validateWithBag('addTeamMember');
    }

    /**
     * Get the validation rules for adding a team member.
     *
     * @return array
     */
    protected function rules()
    {
        return array_filter([
            'phone' => ['required', 'phone', 'exists:users'],
            'role' => Jetstream::hasRoles()
                            ? ['required', 'string', new Role]
                            : null,
        ]);
    }

    /**
     * Ensure that the user is not already on the team.
     *
     * @param  mixed  $team
     * @param  string  $phone
     * @return \Closure
     */
    protected function ensureUserIsNotAlreadyOnTeam($team, string $phone)
    {
        return function ($validator) use ($team, $phone) {
            $validator->errors()->addIf(
                $team->hasUserWithPhone($phone),
                'phone',
                __('This user already belongs to the team.')
            );
        };
    }
}
