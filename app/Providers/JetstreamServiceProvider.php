<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Laravel\Fortify\Fortify;
use App\Models\Lga;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();
        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);

        Fortify::registerView(function () {
            return view('auth.register',['lgas'=>Lga::all()]);
        });

        Fortify::authenticateUsing(function (Request $request) {
           
            $user = User::where('email', $request->email = $request->nin."@kedpol.com")->first();
           
            if ($user &&
                Hash::check($request->nin, $user->password)) {
                return $user;
            }else{
                $user = User::where('phone', $request->nin)->first();
                if ($user &&
                    Hash::check($user->nin, $user->password)) {
                    return $user;
                }
            }
        });
    }

    /**
     * Configure the roles and permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', 'Administrator', [
            'create',
            'read',
            'update',
            'delete',
        ])->description('Administrator users can perform any action.');

        Jetstream::role('manager', 'Manager', [
            'register Politician',
            'Like Politician',
            'follow politician',
        ])->description('Manager users have the ability to register Politician, Like Politician, and follow politician.');

        Jetstream::role('team-leader', 'Team Leader', [
            'register Politician',
            'Like Politician',
            'follow politician',
        ])->description('Manager users have the ability to register Politician, Like Politician, and follow politician.');
    }
}
