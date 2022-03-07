<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\Document;
use App\Models\Office;
use App\Models\PurchaseDescription;
use App\Models\Supplier;
use App\Models\Endorsement;

class DocumentEdit extends Component
{
    // Purchase Request Variables
    public $pr_reference_id;
    public $pr_office_id;
    public $pr_office_id_submit;
    public $pr_office_name;
    public $pr_office_abbr;
    public $pr_description;
    public $pr_purchase_description_id;
    public $pr_purchase_description_id_submit;
    public $pr_purchase_description_name;
    public $pr_office;
    public $pr_purchase_description_particulars;
    public $pr_abc_amount;

    // Purchase Order Variables
    public $po_reference_id;
    public $po_sub_reference_id;
    public $po_office_id;
    public $po_office_id_submit;
    public $po_office_name;
    public $po_office_abbr;
    public $po_description;
    public $po_purchase_description_id;
    public $po_purchase_description_id_submit;
    public $po_purchase_description_name;
    public $po_purchase_description_particulars;
    public $po_office;
    public $po_suppliers;
    public $po_supplier_id;
    public $po_supplier_id_submit;
    public $po_supplier_name;
    public $po_lcb_amount;

    // Voucher Variables
    public $voucher_reference_id;
    public $voucher_sub_reference_id;
    public $voucher_office_id;
    public $voucher_office;
    public $voucher_office_id_submit;
    public $voucher_office_name;
    public $voucher_office_abbr;
    public $voucher_purchase_description;
    public $voucher_purchase_description_id;
    public $voucher_purchase_description_id_submit;
    public $voucher_purchase_description_name;
    public $voucher_purchase_description_particulars;
    public $voucher_payee_id;
    public $voucher_payee_id_submit;
    public $voucher_payee_name;
    public $voucher_payee;
    public $voucher_abc_amount;



    // For Displaying Data
    public $date_of_entry;
    public $reference_id;
    public $sub_reference_id;
    public $description;
    public $process_type_id;
    public $process_type_name;
    public $office_id;
    public $office_name;
    public $office_abbr;
    public $purchase_description_id;
    public $purchase_description_name;
    public $abc_amount;
    public $lcb_amount;
    public $supplier_id;
    public $supplier_name;
    public $supplier_address;
    public $canvasser_id;
    public $status_id;
    public $users_id;
    public $document_process_status_id;
    public $fund;
    public $fund_abbr;
    public $fundWire;
    public $payee;


    public $office_id_submit;

    public $office_pr;
    public $office_po;
    public $office_voucher;
    public $purchase_description_pr;
    public $purchase_description_po;
    public $purchase_description_voucher;

    public $suppliers;


    public function mount($id)
    {
        $query = Document::with('office', 'documentProcessStatus', 'proccessType', 'office', 'purchaseDescription', 'canvasser', 'supplier', 'user')->where('id', '=', $id)->first();

        // assigning values to public variables
        $officeQuery = Office::all();
        $supplierQuery = Supplier::all();
        $purchaseDescriptionQuery = PurchaseDescription::all();


        //  identify Process type
        $this->process_type_id = $query->proccessType->id;
        $this->process_type_name = $query->proccessType->name;


        // Get Selected Process Type Datas (PR, PO, Voucher)
        switch ($this->process_type_id) {
          case 1:
          //   Purchase Request
            $this->pr_reference_id = $query->reference_id;
            $this->pr_office_id = $query->office_id;
            $this->pr_office_id_submit = $query->office_id;
            $this->pr_office_name = $query->office->name;
            $this->pr_office_abbr = $query->office->abbr;
            $this->pr_description = $query->description;
            $this->pr_purchase_description_name = $query->purchaseDescription->name;
            $this->pr_office = $officeQuery;
            $this->pr_purchase_description_id = $query->purchase_description_id;
            $this->pr_purchase_description_id_submit = $query->purchase_description_id;
            $this->pr_purchase_description_particulars = $purchaseDescriptionQuery;
            $this->pr_abc_amount = $query->abc_amount;
          break;

          case 2:
            //   Purchase Order
            $this->po_reference_id = $query->reference_id;
            $this->po_sub_reference_id = $query->sub_reference_id;
            $this->po_office_id = $query->office_id;
            $this->po_office_id_submit = $query->office_id;
            $this->po_office_name = $query->office->name;
            $this->po_office_abbr = $query->office->abbr;
            $this->po_description = $query->description;
            $this->po_purchase_description_id = $query->purchase_description_id;
            $this->voucher_purchase_description_id_submit = $query->purchase_description_id;
            $this->po_purchase_description_name = $query->purchaseDescription->name;
            $this->po_purchase_description_particulars = $purchaseDescriptionQuery;
            $this->po_office = $officeQuery;
            $this->po_suppliers = $supplierQuery;
            $this->po_supplier_id = $query->supplier_id;
            $this->po_supplier_name = $query->supplier->name;
            $this->po_lcb_amount = $query->lcb_amount;
          break;

          case 3:
            //   Voucher
            $this->voucher_reference_id = $query->reference_id;
            $this->voucher_sub_reference_id = $query->sub_reference_id;
            $this->voucher_office = $officeQuery;
            $this->voucher_office_id = $query->office_id;
            $this->voucher_office_id_submit = $query->office_id;
            $this->voucher_office_name = $query->office->name;
            $this->voucher_office_abbr =  $query->office->abbr;
            $this->voucher_purchase_description = $query->description;
            $this->voucher_purchase_description_id = $query->purchase_description_id;
            $this->voucher_purchase_description_id_submit = $query->purchase_description_id;
            $this->voucher_purchase_description_name = $query->purchaseDescription->name;
            $this->voucher_purchase_description_particulars = $purchaseDescriptionQuery;
            $this->voucher_payee = $supplierQuery;
            $this->voucher_payee_id = $query->supplier_id;
            $this->voucher_payee_id_submit = $query->supplier_id;
            $this->voucher_payee_name =  $query->supplier->name;
            $this->voucher_abc_amount = $query->abc_amount;
          break;
       }

        // For Displaying Data
        $this->date_of_entry = $query->date_of_entry;
        $this->reference_id = $query->reference_id;
        $this->sub_reference_id = $query->sub_reference_id;
        $this->description = $query->description;
        $this->office_name = $query->office->name;
        $this->office_abbr = $query->office->abbr;
        $this->office_id = $query->office_id;
        $this->purchase_description_name = $query->purchaseDescription->name;
        $this->purchase_description_id = $query->purchase_description_id;
        $this->abc_amount = $query->abc_amount;
        $this->lcb_amount = $query->lcb_amount;
        $this->supplier_id = $query->supplier_id;
        if (isset($query->canvasser->name)) {
            $this->canvasser_id = $query->canvasser->name;
        } else {
            $this->canvasser_id = 'No Canvasser';
        }
        $this->status_id = $query->status_id;
        $this->users_id = $query->users_id;
        $this->document_process_status_id = $query->documentProcessStatus->name;
        $this->supplier_name = $query->supplier->name;
        $this->supplier_id = $query->supplier_id;
        $this->supplier_address = $query->supplier->address;
        $this->office = $officeQuery;
        $this->purchase_description_particulars = $purchaseDescriptionQuery;
        $this->suppliers = $supplierQuery;
    }

    public function submitForm()
    {
        $query = Document::with('office', 'documentProcessStatus', 'proccessType', 'office', 'purchaseDescription', 'canvasser', 'supplier', 'user')->where('reference_id', '=', $this->reference_id)->first();

        // update document table
        switch ($this->process_type_id) {
          case 1:
            $query->date_of_entry = $this->date_of_entry;
            $query->reference_id = $this->pr_reference_id;
            $query->office_id =  $this->pr_office_id_submit;
            $query->description = $this->pr_description;
            $query->purchase_description_id = $this->pr_purchase_description_id_submit;
            $query->abc_amount = $this->pr_abc_amount;
            $query->user_id = auth()->user()->id;
            $query->save();


        
          // reference code
            // $this->emit('successMessage');
            // session()->put('successMessage', 'Document successfully created');
            // return back();

            break;

          case 2:
            # code...
            break;

          case 3:
            # code...
            break;

          default:
            // send error message
            break;
        }
    }

    public function render()
    {
        return view('livewire.document.document-edit');
    }
}