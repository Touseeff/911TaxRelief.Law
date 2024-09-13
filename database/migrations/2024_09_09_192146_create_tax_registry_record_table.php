<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tax_registry_record', function (Blueprint $table) {
            $table->string('url_pin')->unique()->nullable();
            $table->string('phone_pin')->nullable();
            $table->string('name')->nullable();
            $table->string('firm')->nullable();
            $table->string('mailing')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('zip5')->nullable();
            $table->string('zip4')->nullable();
            $table->string('crrt')->nullable();
            $table->string('dpc')->nullable();
            $table->string('barcode')->nullable();
            $table->string('salut')->nullable();
            $table->string('first')->nullable();
            $table->string('mi')->nullable();
            $table->string('last')->nullable();
            $table->string('deg')->nullable();
            $table->string('type')->nullable();
            $table->string('creditor')->nullable();
            $table->string('amount')->nullable();
            $table->string('upload_date')->nullable();
            $table->string('file_date')->nullable();
            $table->string('rdi_')->nullable();
            $table->string('ran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_registry_record');
    }
};
