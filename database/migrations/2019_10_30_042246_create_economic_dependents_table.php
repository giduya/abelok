<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEconomicDependentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_dependents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('curp')->nullable();
            $table->date('birth_date');
            $table->string('rfc')->nullable();
            $table->string('relationship');
            $table->string('relationship_description')->nullable();
            $table->string('is_strange');
            $table->string('live_same_address');
            $table->string('place_of_residence')->nullable();
            $table->string('street')->nullable();
            $table->string('outdoor_number')->nullable();
            $table->string('interior_number')->nullable();
            $table->string('suburb')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('municipality')->nullable();
            $table->string('federal_entity')->nullable();
            $table->string('postal_code')->nullable();

            $table->string('sector');
            $table->string('main_sector')->nullable();
            $table->string('description_sector')->nullable();
            $table->string('level')->nullable();
            $table->string('ambit')->nullable();
            $table->string('institution')->nullable();
            $table->string('administrative_unit')->nullable();
            $table->string('company')->nullable();
            $table->string('company_rfc')->nullable();
            $table->string('position')->nullable();
            $table->double('salary')->nullable();
            $table->date('start_date')->nullable();
            $table->string('is_provider')->nullable();
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
        Schema::dropIfExists('economic_dependents');
    }
}
