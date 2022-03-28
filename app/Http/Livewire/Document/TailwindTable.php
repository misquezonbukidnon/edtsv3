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
    public $filterByProcessType;
    public $sortField;
    public $sortAsc = true;

    public function mount()
    {
        // create a query from Document model where status_id is equal to 1
        $query = Document::where('status_id', 1)->get();

        // assigning public properties to the query
        $this->documentArray = $query;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedFilterByProcessType()
    {
        if ($this->filterByProcessType == 0) {
            $this->filterByProcessType = '';
            $this->resetPage();
        }
    }

    public function render()
    {
        return view('livewire.document.tailwind-table', [
            'documents' => Document::where(function ($query) {
                $query->where('reference_id', 'like', '%' . $this->search . '%')
                ->where('process_type_id', 'like', '%' . $this->filterByProcessType . '%');
            })->paginate($this->paginateValue),
        ]);
    }
}
