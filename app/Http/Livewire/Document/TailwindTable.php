<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;

class TailwindTable extends Component
{
    use WithPagination;
    public $documentArray;
    public $paginateValue;
    public $search;

    public function mount()
    {
        // create a query from Document model where status_id is equal to 1
        $query = Document::where('status_id', 1)->get();

        // assigning public properties to the query
        $this->documentArray = $query;
    }

    public function render()
    {
        return view('livewire.document.tailwind-table', [
            'documents' => Document::where('reference_id', 'like', '%'.$this->search.'%')->paginate(10),
        ]);
    }
}
