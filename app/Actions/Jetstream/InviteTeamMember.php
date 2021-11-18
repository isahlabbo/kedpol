<?php

namespace App\Actions\Jetstream;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Jetstream\Contracts\InvitesTeamMembers;
use Laravel\Jetstream\Events\InvitingTeamMember;
use Laravel\Jetstream\Jetstream;
use Laravel\Jetstream\Mail\TeamInvitation;
use Laravel\Jetstream\Rules\Role;
use App\Models\User;

class InviteTeamMember implements InvitesTeamMembers
{
    /**
     * Invite a new team member to the given team.
     *
     * @param  mixed  $user
     * @param  mixed  $team
     * @param  string  $email
     * @param  string|null  $role
     * @return void
     */
    public function invite($user, $team, string $phone, string $role = null)
    {
        
        Gate::forUser($user)->authorize('addTeamMember', $team);

        $this->validate($team, $phone, $role);
       
            InvitingTeamMember::dispatch($team, $phone, $role);
        
            $invitation = $team->teamInvitations()->create([
                'phone' => $phone,
                'role' => $role,
            ]);
        

        // Mail::to($email)->send(new TeamInvitation($invitation));
    }

    /**
     * Validate the invite member operation.
     *
     * @param  mixed  $team
     * @param  string  $email
     * @param  string|null  $role
     * @return void
     */
    protected function validate($team, string $phone, ?string $role)
    {
        Validator::make([
            'phone' => $phone,
            'role' => $role,
        ], $this->rules($team), [
            'phone.unique' => __('This user has already been invited to the team.'),
        ])->after(
            $this->ensureUserIsNotAlreadyOnTeam($team, $phone)
        )->validateWithBag('addTeamMember');
    }

    /**
     * Get the validation rules for inviting a team member.
     *
     * @param  mixed  $team
     * @return array
     */
    protected function rules($team)
    {
        return array_filter([
            'phone' => ['required', Rule::unique('team_invitations')->where(function ($query) use ($team) {
                $query->where('team_id', $team->id);
            })],
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

    protected function isRegisteredUser($phone)
    {
        return User::where('phone',$phone)->first();
    }
}
