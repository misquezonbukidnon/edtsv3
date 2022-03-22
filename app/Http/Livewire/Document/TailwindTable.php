<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use App\Models\Document;

class TailwindTable extends Component
{
    public $documentArray;

    public function mount()
    {
        // create a query from Document model where status_id is equal to 1
        $query = Document::where('status_id', 1)->get();

        // assigning public properties to the query
        $this->documentArray = $query;
    }

    public function render()
    {
        return view('livewire.document.tailwind-table');
    }
}
