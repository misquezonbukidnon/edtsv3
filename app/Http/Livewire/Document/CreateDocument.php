<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;

class CreateDocument extends Component
{
    public $PR = false;
    public $formTitle = "Voucher";


    public function show()
    {
        $this->PR = true;
    }
    public function render()
    {
        return view('livewire.document.create-document')->extends('layouts.app');
    }
}