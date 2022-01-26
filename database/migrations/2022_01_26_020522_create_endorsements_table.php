<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndorsementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endorsements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->constrained();
            $table->foreignId('endorsing_office_id')->nullable()->constrained();
            $table->foreignId('receiving_office_id')->nullable()->constrained();
            $table->string('date_endorsed')->nullable();
            $table->string('date_received')->nullable();
            $table->foreignId('status_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('endorser_id')->nullable()->constrained();
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
        Schema::dropIfExists('endorsements');
    }
}
