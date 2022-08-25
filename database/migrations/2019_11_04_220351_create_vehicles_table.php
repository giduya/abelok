<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string("type");
            $table->string("owner");
            $table->string("third_party_type")->nullable();
            $table->string("third_party_name")->nullable();
            $table->string("third_party_rfc")->nullable();
            $table->string("property_transmitter");
            $table->string("transmitter_name");
            $table->string("transmitter_rfc");
            $table->string("transmitter_relationship");
            $table->string("transmitter_relationship_description")->nullable();
            $table->string("brand");
            $table->string("model");
            $table->integer("year");
            $table->string("serie");
            $table->string("location_registration");
            $table->string("country_registration")->nullable();
            $table->string("acquisition_type");
            $table->string("payment_method");
            $table->double("acquisition_value");
            $table->string("currency");
            $table->date("acquisition_date");
            $table->string("acquisition_status")->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
