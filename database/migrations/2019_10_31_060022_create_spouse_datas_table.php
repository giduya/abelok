<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpouseDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouse_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->date('birth_date');
            $table->string('rfc');
            $table->string('relationship');
            $table->string('foreign_citizen');
            $table->string('curp')->nullable();
            $table->string('economic_dependent');
            $table->string('resides_place')->nullable();
            $table->string('declarant_address');
            $table->string('location')->nullable();
            $table->string('street')->nullable();
            $table->string('outdoor_number')->nullable();
            $table->string('interior_number')->nullable();
            $table->string('colony')->nullable();
            $table->string('municipality')->nullable();
            $table->string('federal_entity')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('work_activity')->nullable();
            $table->string('government_level')->nullable();
            $table->string('public_ambit')->nullable();
            $table->string('public_entity')->nullable();
            $table->string('ascription_area')->nullable();
            $table->string('employment')->nullable();
            $table->string('principal_function')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->date('entry_date')->nullable();
            $table->string('company_name')->nullable();
            $table->string('position')->nullable();
            $table->string('company_rfc')->nullable();
            $table->date('company_entry_date')->nullable();
            $table->string('private_montly_salary')->nullable();
            $table->string('government_supplier')->nullable();
            $table->string('private_sector')->nullable();
            $table->string('other_work_activity')->nullable();
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
        Schema::dropIfExists('spouse_datas');
    }
}
