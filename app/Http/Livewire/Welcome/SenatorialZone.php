<?php

namespace App\Http\Livewire\Welcome;

use Livewire\Component;

class SenatorialZone extends Component
{
    public $senatorialZones;
    
    public function render()
    {
        return view('livewire.welcome.senatorial-zone');
    }
}
