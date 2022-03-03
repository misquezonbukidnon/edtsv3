<?php

namespace App\Http\Livewire;

use App\Models\Document;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\Rule;

final class DocumentTable extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this->showCheckBox()
            ->showPerPage()
            ->showSearchInput()
            ->showExportOption('download', ['excel', 'csv']);
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Document::query()
        ->join('process_types', function ($process_types) {
            $process_types->on('documents.process_type_id', '=', 'process_types.id');
        })
        ->join('suppliers', function ($suppliers) {
            $suppliers->on('documents.supplier_id', '=', 'suppliers.id');
        })
        ->join('statuses', function ($statuses) {
            $statuses->on('documents.status_id', '=', 'statuses.id');
        })
         ->select([
                'documents.id',
                'documents.reference_id',
                'documents.description',
                'process_types.name as process',
                'suppliers.name as supplier',
                'statuses.name as status',
         ]);
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('documents.id')
            ->addColumn('documents.reference_id')
            ->addColumn('process')
            ->addColumn('supplier')
            ->addColumn('documents.description')
            ->addColumn('documents.status');
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
    * PowerGrid Columns.
    *
    * @return array<int, Column>
    */
    public function columns(): array
    {
        return [
            Column::add()
                ->title('Ref #')
                ->field('reference_id')
                ->searchable()
                ->sortable(),

            Column::add()
                ->title(__('Process'))
                ->field('process', 'process_types.name')
                ->searchable()
                ->sortable(),

            Column::add()
                ->title(__('End User / Supplier / Payee'))
                ->field('supplier', 'suppliers.name')
                ->searchable()
                ->sortable(),

            Column::add()
                ->title('Description')
                ->field('description')
                ->searchable()
                ->sortable(),

             Column::add()
                ->title(__('Status'))
                ->field('status', 'statuses.name')
                ->searchable()
                ->sortable(),

            // Column::add()
            //     ->title('Status')
            //     ->field('')
            //     ->searchable()
            //     ->sortable(),


        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
    * PowerGrid Document Action Buttons.
    *
    * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
    */

    public function actions(): array
    {
        return [
            Button::add('search-button')
                ->caption('<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 px-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"  stroke-width="2" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                            </svg>')
                ->class('flex item-center justify-center hover:text-blue-600  px-0 btn')
                ->route('findrecordform', ['id']),
            Button::add('edit-button')
                ->caption('<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 px-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg> ')
                ->class('flex item-center hover:text-blue-600 px-0 mx-n5 btn')
                ->route('edit-document', ['id']),
        ];
    }
    protected function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            [
                    'eventX',
                    'eventY',
                    'openQR',
                ]
        );
    }

    public function openQR(): void
    {
        dd($this->checkboxValues);
        // if (count($this->checkboxValues) == 0) {
            //     $this->dispatchBrowserEvent('showAlert', ['message' => 'You must select at least one item!']);

            //     return;
            // }

            // $ids = implode(', ', $this->checkboxValues);

            // $this->dispatchBrowserEvent('showAlert', ['message' => 'You have selected IDs: ' . $ids]);
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Document Action Rules.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Rules\Rule>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($document) => $document->id === 1)
                ->hide(),
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable the method below to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

     /**
     * PowerGrid Document Update.
     *
     * @param array<string,string> $data
     */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Document::query()
                ->update([
                    $data['field'] => $data['value'],
                ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status = 'error', string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field'   => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field'   => __('Error updating custom field.'),
            ]
        ];

        $message = ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);

        return (is_string($message)) ? $message : 'Error!';
    }
    */
}