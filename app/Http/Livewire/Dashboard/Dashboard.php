<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Document;

class Dashboard extends Component
{
    public $inProgress;
    public $cancelled;
    public $completed;

    public function mount()
    {
        // create a query from Transaction model where status is in progress
        $countInProgress = Document::where('status_id', 2)->count();
        $countCancelled = Document::where('status_id', 3)->count();
        $countCompleted = Document::where('status_id', 4)->count();

        // Assign the query result to the public property
        $this->inProgress = $countInProgress;
        $this->cancelled = $countCancelled;
        $this->completed = $countCompleted;
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard')->extends('layouts.app');
    }
}
