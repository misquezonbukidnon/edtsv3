<?php

namespace App\Http\Livewire\Endorsement;

use Livewire\Component;

class EndorsementCreate extends Component
{
    public $attachmentsData = [];

    public function render()
    {
        return view('livewire.endorsement.endorsement-create');
    }
}