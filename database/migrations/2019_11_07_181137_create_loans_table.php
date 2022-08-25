<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');

            $table->string('property_type')->nullable();
            $table->string('location')->nullable();
            $table->string('street')->nullable();
            $table->string('outdoor_number')->nullable();
            $table->string('interior_number')->nullable();
            $table->string('postal_code')->nullable();

            $table->string('colony')->nullable();
            $table->string('federal_entity')->nullable();
            $table->string('municipality')->nullable();

            $table->string('vehicle_type')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();
            $table->string('serie')->nullable();

            $table->string('location_registration')->nullable();
            $table->string('federal_entity_registration')->nullable();
            $table->string('country_registration')->nullable();


            $table->string('third_party_type')->nullable();
            $table->string('third_party_name')->nullable();
            $table->string('third_party_rfc')->nullable();
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
        Schema::dropIfExists('loans');
    }
}
