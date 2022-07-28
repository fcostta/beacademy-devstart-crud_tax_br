<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxs', function (Blueprint $table) {
            $table->id();
            $table->string('revenueCode');
            $table->string('name');
            $table->text('description');
            $table->string('aliquot');
            $table->string('calculationPeriod');
            $table->string('sphere');
            $table->string('accountingAccount');
            $table->string('costCenter');
            $table->string('collectionAgency');
            $table->string('basicLegislation');
            $table->string('incidence');
            $table->string('typeOfTaxpayer');
            $table->string('linkedTable');
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
        Schema::dropIfExists('taxs');
    }
};
