<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_officials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ex_public_official');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->double('salary')->nullable();
            $table->double('activity_income')->nullable();
            $table->string('rfc')->nullable();
            $table->string('sector')->nullable();
            $table->double('financial_income')->nullable();
            $table->string('financial_tool')->nullable();
            $table->double('professional_income')->nullable();
            $table->string('professional_description')->nullable();
            $table->double('sales_property')->nullable();
            $table->string('sales_property_description')->nullable();
            $table->double('other_activities_income')->nullable();
            $table->double('total_income')->nullable();
            $table->double('dependents_income')->nullable();
            $table->double('sum_total_income')->nullable();
            $table->text('clarification')->nullable();
            $table->integer('declaration_id')->unsigned();
            $table->foreign('declaration_id')->references('id')->on('declarations');
            $table->softDeletes();
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
        Schema::dropIfExists('public_officials');
    }
}
