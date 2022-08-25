<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('curp');
            $table->string('rfc');
            $table->string('homoclave');
            $table->string('email');
            $table->string('email_2')->nullable();
            $table->string('phone');
            $table->string('phone_2')->nullable();
            $table->string('civil_status');
            $table->string('patrimonial_regime')->nullable();
            $table->string('patrimonial_regime_description')->nullable();
            $table->string('country_of_birth');
            $table->string('nationality');
            $table->text('clarification')->nullable();
            $table->integer('declaration_id')->unsigned();
            $table->foreign('declaration_id')->references('id')->on('declarations');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_data');
    }
}
