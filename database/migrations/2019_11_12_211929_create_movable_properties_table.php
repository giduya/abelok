<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovablePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('movable_properties', function (Blueprint $table) {
        $table->increments('id');
        $table->string('owner');
        $table->string('type');
        $table->string('other_type')->nullable();
        $table->string('transmitter_type');
        $table->string('transmitter_name');
        $table->string('transmiter_rfc');
        $table->string('transmitter_relationship');
        $table->string('other_transmitter_relationship')->nullable();
        $table->string('third_type')->nullable();
        $table->string('third_name')->nullable();
        $table->string('third_rfc')->nullable();
        $table->string('description');
        $table->string('acquisition_type');
        $table->string('payment_type');
        $table->string('acquisition_value');
        $table->string('currency_type');
        $table->date('acquisition_date');
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
        Schema::dropIfExists('movable_properties');
    }
}
