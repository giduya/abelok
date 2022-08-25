<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecisionCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decision_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner');
            $table->string('company');
            $table->string('company_rfc');
            $table->string('type_company');
            $table->string('type_company_description')->nullable();
            $table->string('position');
            $table->date('start_date');
            $table->string('receive_remuneration');
            $table->double('amount')->nullable();
            $table->string('location');
            $table->string('country')->nullable();
            $table->string('federal_entity')->nullable();

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
        Schema::dropIfExists('decision_companies');
    }
}
