<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;

class CreateDocument extends Component
{
    public function render()
    {
        return view('livewire.document.create-document')->extends('layouts.app');
    }
}
