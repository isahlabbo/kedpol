<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use App\Models\TeamInvitation;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password','phone','polling_unit_id','code','nin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function pollingUnit()
    {
        return $this->belongsTo(PollingUnit::class);
    }

    public function userRoles()
    {
        return $this->hasMany(UserRole::class);
    }

    public function isAdmin()
    {
        $flag = null;
        foreach ($this->userRoles->where('role_id',1) as $userRole) {
            $flag = true;
        }
        return $flag;
    }

    public function teamInvitations($status)
    {
        $invitations = [];
        foreach(TeamInvitation::where(['phone'=>$this->phone,'status'=>$status])->get() as $invitation){
            $invitations[] = $invitation;
        }
        return $invitations;
    }
   

    public function createTeam()
    {
        $this->ownedTeams()->save(Team::forceCreate([
            'user_id' => $this->id,
            'name' => explode(' ', $this->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
