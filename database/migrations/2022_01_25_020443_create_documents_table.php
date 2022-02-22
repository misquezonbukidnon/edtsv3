<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_entry');
            $table->string('reference_id');
            $table->string('sub_reference_id')->nullable();
            $table->text('description');
            $table->foreignId('process_type_id')->constrained();
            $table->foreignId('office_id')->constrained();
            $table->foreignId('purchase_description_id')->constrained();
            $table->decimal('abc_amount', 15, 2);
            $table->decimal('lcb_amount', 15, 2)->nullable();
            $table->string('supplier_id')->nullable()->constrained();
            $table->foreignId('canvasser_id')->nullable()->constrained();
            $table->foreignId('status_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('document_process_status_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}