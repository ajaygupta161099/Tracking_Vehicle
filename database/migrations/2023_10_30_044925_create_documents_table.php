<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up(): void
    {

        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('document_name', 255)->unique();
            $table->tinyInteger('document_type');
            $table->boolean('gst_status');
            $table->integer('document_expense_ledger');
            $table->boolean('prepaid_function');
            $table->integer('prepaid_ledger');
            $table->integer('monthly_amount');
            $table->integer('max_validity'); // Remove the ',3' as it's not needed here
            $table->string('reference_number', 32);
            $table->date('valid_from');
            $table->date('valid_to');
            $table->string('authority', 32);
            $table->boolean('upload_image');
            $table->integer('ncb');
            $table->integer('idv');
            $table->integer('document_amount'); // Corrected typo in the column name
            $table->integer('vehicle_number');
            $table->boolean('status');
            $table->tinyInteger('approval_status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
}

