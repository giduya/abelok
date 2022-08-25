<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('properties', function (Blueprint $table) {
        $table->increments('id');
        $table->string('property_type');
        $table->string('other_property_type')->nullable();
        $table->string('property_owner');
        $table->string('ownership_percentage');
        $table->string('land_surface');
        $table->string('building_surface')->nullable();
        $table->string('third_type')->nullable();
        $table->string('third_name')->nullable();
        $table->string('third_rfc')->nullable();
        $table->string('acquisition_type');
        $table->string('payment_type');
        $table->string('transmitter_type');
        $table->string('transmitter_name');
        $table->string('transmiter_rfc');
        $table->string('transmitter_relationship');
        $table->string('other_transmitter_relationship')->nullable();
        $table->string('acquisition_value');
        $table->string('acquisition_value_type');
        $table->string('currency_type');
        $table->date('acquisition_date');
        $table->string('public_registry_data');
        $table->string('property_location');
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
        $table->string('property_leave')->nullable();
        $table->string('other_property_leave')->nullable();
        $table->string('reason_property_leave')->nullable();
        $table->string('clarification')->nullable();

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
        Schema::dropIfExists('properties');
    }
}
