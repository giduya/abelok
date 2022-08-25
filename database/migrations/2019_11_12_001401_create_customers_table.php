<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('other_activity');

            $table->string('owner')->nullable();
            $table->string('name')->nullable();
            $table->string('rfc')->nullable();
            $table->string('patrimonial_regime_customer')->nullable();
            $table->string('name_customer')->nullable();
            $table->string('rfc_customer')->nullable();
            $table->string('main_sector')->nullable();
            $table->string('amount')->nullable();
            $table->string('federal_entity')->nullable();
            $table->string('country')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
