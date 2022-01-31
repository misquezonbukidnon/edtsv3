<?php

namespace App\Http\Livewire\Document;

use App\Models\Office;
use App\Models\Status;
use Livewire\Component;
use App\Models\Supplier;
use App\Models\ProcessType;
use App\Models\PurchaseDescription;

class DocumentCreate extends Component
{
    public $date_of_entry;
    public $reference_id;
    public $sub_reference_id;
    public $description;
    public $process_type_id;
    public $testInput;
    public $office_id;
    public $purchase_description_id;
    public $abc_amount;
    public $lcb_amount;
    public $supplier_id;
    public $canvasser_id;
    public $status_id;
    public $user_id;
    public $document_process_status_id;

    public function mount()
    {
        $supplierQuery = Supplier::all();
        $purchaseDescriptionQuery = PurchaseDescription::all();
        $statusQuery = Status::all();
        $officeQuery = Office::all();
    }

    public function render()
    {
        return view('livewire.document.document-create')->extends('layouts.app');
    }
}
