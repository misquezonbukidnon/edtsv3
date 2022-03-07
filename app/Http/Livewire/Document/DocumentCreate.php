<?php

namespace App\Http\Livewire\Document;

use App\Models\Office;
use App\Models\Status;
use Livewire\Component;
use App\Models\Document;
use App\Models\Supplier;
use App\Models\Canvasser;
use App\Models\Endorsement;
use App\Models\ProcessType;
use App\Models\PurchaseDescription;

class DocumentCreate extends Component
{
    // Quueries Purchase Request
    public $process_type_id;
    public $office;
    public $purchase_description;

    // Queries Purchase Order
    public $transaction_type;
    public $office_po;
    public $purchase_description_po;
    public $queryPurchaseOrderSubReferenceNumber;
    public $supplier;
    public $supplier_id;
    public $lcb_amount;
    public $canvasser;
    public $canvasser_id;

    // Queries Voucher
    public $queryVoucherSubReferenceNumber;
    public $purchase_description_voucher;
    public $office_voucher;
    public $supplier_voucher;
    // Inputs
    public $date_of_entry;
    public $reference_id;
    public $sub_reference_id_purchase_order;
    public $sub_reference_id_voucher;
    public $fund;
    public $description;
    public $office_id;
    public $purchase_description_id;
    public $abc_amount;

    public function mount()
    {
        $supplierQuery = Supplier::all();
        $this->supplier = $supplierQuery;
        $this->supplier_voucher = $supplierQuery;
        $purchaseDescriptionQuery = PurchaseDescription::all();
        $this->purchase_description = $purchaseDescriptionQuery;
        $this->purchase_description_po = $purchaseDescriptionQuery;
        $this->purchase_description_voucher = $purchaseDescriptionQuery;
        $statusQuery = Status::all();
        $officeQuery = Office::all();
        $this->office = $officeQuery;
        $this->office_po = $officeQuery;
        $this->office_voucher = $officeQuery;
        $canvasserQuery = Canvasser::all();
        $this->canvasser = $canvasserQuery;
    }

    public function updatedSubReferenceIdPurchaseOrder($value)
    {
        $query = Document::where('reference_id', $value)->first();
        $this->queryPurchaseOrderSubReferenceNumber = $query;
        if (isset($this->queryPurchaseOrderSubReferenceNumber) && $value != null) {
            $this->sub_reference_id_purchase_order = $query->reference_id;
            $this->description = $query->description;
            $this->office_id = $query->office_id;
            $this->purchase_description_id = $query->purchase_description_id;
            $this->abc_amount = $query->abc_amount;
            $this->lcb_amount = $query->lcb_amount;
            $this->supplier_id = $query->supplier_id;
        } else {
            // empty fields
            $this->description = '';
            $this->office_id = '';
            $this->purchase_description_id = '';
            $this->abc_amount = '';
            $this->lcb_amount = '';
            $this->supplier_id = '';
        }
    }

    public function updatedSubReferenceIdVoucher($value)
    {
        $query = Document::where('sub_reference_id', $value)->first();
        $this->queryVoucherSubReferenceNumber = $query;
        if (isset($query) && $value != null) {
            $this->sub_reference_id_voucher = $query->sub_reference_id;
            $this->description = $query->description;
            $this->office_id = $query->office_id;
            $this->purchase_description_id = $query->purchase_description_id;
            $this->abc_amount = $query->abc_amount;
            $this->lcb_amount = $query->lcb_amount;
            $this->supplier_id = $query->supplier_id;
        } else {
            // empty the fields
            $this->description = '';
            $this->office_id = '';
            $this->purchase_description_id = '';
            $this->abc_amount = '';
            $this->lcb_amount = '';
            $this->supplier_id = '';
        }
    }

    public function formSubmit()
    {
        // create a switch statement for the process type from 1 to 3
        // 1 = Purchase Request
        // 2 = Purchase Order
        // 3 = Voucher
        switch ($this->process_type_id) {
            case '1':
                $this->validate([
                    'date_of_entry' => ['required'],
                    'reference_id' => ['required', 'unique:documents'],
                    'fund' => ['required'],
                    'description' => ['required'],
                    'office_id' => ['required'],
                    'purchase_description_id' => ['required'],
                    'abc_amount' => ['required'],
                ]);

                // Return an error message if the reference number is already in the database
                $queryReferenceNumber = Document::where('reference_id', $this->fund.'-'.$this->reference_id)->first();
                if (isset($queryReferenceNumber)) {
                    $this->emit('errorMessage');
                    session()->put('errorMessage', 'Reference number already exists');
                    return back();
                } else {
                    $document = new Document();
                    $document->date_of_entry = $this->date_of_entry;
                    $document->reference_id = $this->fund.'-'.$this->reference_id;
                    $document->description = $this->description;
                    $document->process_type_id = $this->process_type_id;
                    $document->office_id = $this->office_id;
                    $document->purchase_description_id = $this->purchase_description_id;
                    $document->abc_amount = $this->abc_amount;
                    $document->supplier_id = 1; // default supplier id
                    $document->status_id = 1;
                    $document->document_process_status_id = 1;
                    $document->user_id = auth()->user()->id;
                    $document->save();

                    // empty the inputs
                    $this->date_of_entry = '';
                    $this->reference_id = '';
                    $this->fund = '';
                    $this->description = '';
                    $this->office_id = '';
                    $this->purchase_description_id = '';
                    $this->abc_amount = '';

                    // Create an endorsement for the document
                    $endorsement = new Endorsement();
                    $endorsement->document_id = $document->id;
                    $endorsement->endorsing_office_id = $document->office_id;
                    $endorsement->status_id = 1;
                    $endorsement->user_id = auth()->user()->id;
                    $endorsement->save();

                    $this->emit('successMessage');
                    session()->put('successMessage', 'Document successfully created');
                    return back();
                }
                break;

            case '2':
                $this->validate([
                    'date_of_entry' => ['required'],
                    'reference_id' => ['required'],
                    'sub_reference_id_purchase_order' => ['required'],
                    'canvasser_id' => ['required'],
                    'description' => ['required'],
                    'office_id' => ['required'],
                    'purchase_description_id' => ['required'],
                    'lcb_amount' => ['required'],
                    'supplier_id' => ['required'],
                ]);

                $queryReferenceNumberPo = Document::where('reference_id', $this->sub_reference_id_purchase_order)->first();
                if (isset($queryReferenceNumberPo)) {
                    $document = new Document();
                    $document->date_of_entry = $this->date_of_entry;
                    $document->reference_id = 'PO'.'-'.$this->reference_id;
                    $document->sub_reference_id = $this->sub_reference_id_purchase_order;
                    $document->description = $this->description;
                    $document->process_type_id = $this->process_type_id;
                    $document->office_id = $this->office_id;
                    $document->purchase_description_id = $this->purchase_description_id;
                    $document->abc_amount = $this->abc_amount;
                    $document->lcb_amount = $this->lcb_amount;
                    $document->supplier_id = $this->supplier_id;
                    $document->canvasser_id = $this->canvasser_id;
                    $document->status_id = 1;
                    $document->document_process_status_id = 1;
                    $document->user_id = auth()->user()->id;
                    $document->save();

                    // empty the inputs
                    $this->date_of_entry = '';
                    $this->reference_id = '';
                    $this->sub_reference_id_purchase_order = '';
                    $this->description = '';
                    $this->process_type_id = '';
                    $this->office_id = '';
                    $this->purchase_description_id = '';
                    $this->abc_amount = '';
                    $this->lcb_amount = '';
                    $this->supplier_id = '';
                    $this->canvasser_id = '';
                    $this->status_id = '';
                    $this->document_process_status_id = '';


                    // Create an endorsement for the document
                    $endorsement = new Endorsement();
                    $endorsement->document_id = $document->id;
                    $endorsement->endorsing_office_id = $document->office_id;
                    $endorsement->status_id = 1;
                    $endorsement->user_id = auth()->user()->id;
                    $endorsement->save();


                    $this->emit('successMessage');
                    session()->put('successMessage', 'Document successfully created');
                    return back();
                } else {
                    $this->emit('errorMessage');
                    session()->put('errorMessage', 'Sub-reference number does not exist. Reference number already exists in the database');
                    return back();
                }

                break;

            case '3':
                $this->validate([
                    'date_of_entry' => ['required'],
                    'reference_id' => ['required'],
                    'sub_reference_id_voucher' => ['required'],
                    'description' => ['required'],
                    'office_id' => ['required'],
                    'purchase_description_id' => ['required'],
                    'lcb_amount' => ['required'],
                    'supplier_id' => ['required'],
                ]);

                $queryReferenceNumberVoucher = Document::where('sub_reference_id', $this->sub_reference_id_voucher)->first();
                // ERROR: Records even though reference number does not exist in the database

                if (isset($queryReferenceNumberVoucher)) {
                    $document = new Document();
                    $document->date_of_entry = $this->date_of_entry;
                    $document->reference_id = $this->reference_id;
                    $document->sub_reference_id = $this->sub_reference_id_voucher;
                    $document->description = $this->description;
                    $document->process_type_id = $this->process_type_id;
                    $document->office_id = $this->office_id;
                    $document->purchase_description_id = $this->purchase_description_id;
                    $document->abc_amount = $this->abc_amount;
                    $document->lcb_amount = $this->lcb_amount;
                    $document->supplier_id = $this->supplier_id;
                    $document->canvasser_id = $queryReferenceNumberVoucher->canvasser_id;
                    $document->status_id = 1;
                    $document->document_process_status_id = 1;
                    $document->user_id = auth()->user()->id;
                    $document->save();

                    // empty the inputs
                    $this->date_of_entry = '';
                    $this->reference_id = '';
                    $this->sub_reference_id_voucher = '';
                    $this->description = '';
                    $this->process_type_id = '';
                    $this->office_id = '';
                    $this->purchase_description_id = '';
                    $this->abc_amount = '';
                    $this->lcb_amount = '';
                    $this->supplier_id = '';
                    $this->canvasser_id = '';
                    $this->status_id = '';
                    $this->document_process_status_id = '';


                    // Create an endorsement for the document
                    $endorsement = new Endorsement();
                    $endorsement->document_id = $document->id;
                    $endorsement->endorsing_office_id = $document->office_id;
                    $endorsement->status_id = 1;
                    $endorsement->user_id = auth()->user()->id;
                    $endorsement->save();


                    $this->emit('successMessage');
                    session()->put('successMessage', 'Document successfully created');
                    return back();
                } else {
                    $this->emit('errorMessage');
                    session()->put('errorMessage', 'Reference number does not exist.');
                    return back();
                }

                break;
            default:
                // return an error message if the process type is not selected
                return redirect()->back()->with('error', 'Please select a process type');
                break;
        }
    }

    public function render()
    {
        return view('livewire.document.document-create')->extends('layouts.app');
    }
}
