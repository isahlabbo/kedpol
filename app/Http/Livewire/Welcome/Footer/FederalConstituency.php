<?php

namespace App\Http\Livewire\Welcome\Footer;

use Livewire\Component;

class FederalConstituency extends Component
{
    public $federalConstituencies;
    
    public function render()
    {
        return view('livewire.welcome.footer.federal-constituency');
    }
}
