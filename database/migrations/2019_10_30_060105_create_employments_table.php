<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('declaration_id')->unsigned();
            $table->string('government_level');
            $table->string('public_ambit');
            $table->string('public_entity');
            $table->string('ascription_area');
            $table->string('employment');
            $table->string('fee');
            $table->string('employment_level');
            $table->string('principal_function');
            $table->date('entry_date');
            $table->string('office_phone');
            $table->string('office_phone_extension')->nullable();
            $table->string('location');
            $table->string('street');
            $table->string('outdoor_number');
            $table->string('interior_number')->nullable();
            $table->string('colony')->nullable();
            $table->string('municipality')->nullable();
            $table->string('federal_entity')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code');
            $table->text('clarification')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // foreing key
            $table->foreign('declaration_id')->references('id')->on('declarations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employments');
    }
}
