<?php

namespace App\Http\Livewire\Welcome\Footer;

use Livewire\Component;

class StateConstituency extends Component
{
    public $stateConstituencies;

    public function render()
    {
        return view('livewire.welcome.footer.state-constituency');
    }
}
