<?php

namespace App\Http\Livewire\Team;

use Livewire\Component;
use App\Models\User;

class Invitation extends Component
{
    public $invitation = '';
    
   
    public function acceptInvitation()
    {
        $member = User::where('phone',$this->invitation->phone)->first();

        $this->invitation->team->teamUsers()->create([
            'user_id'=>$member->id,
            'role'=>$this->invitation->role
            ]);
        $member->update(['current_team_id'=>$this->invitation->team->id]);

        $this->invitation->update(['status'=>'accepted']);

        $member->switchTeam($this->invitation->team);
    }

    public function rejectInvitation()
    {
        
        $this->invitation->update(['status'=>'reject']);
        
    }

    public function render()
    {
        return view('livewire.team.invitation');
    }
}
