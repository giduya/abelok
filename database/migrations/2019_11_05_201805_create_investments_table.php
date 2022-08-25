<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('type_description');

            $table->string('third_party_type')->nullable();
            $table->string('third_party_name')->nullable();
            $table->string('third_party_rfc')->nullable();


            $table->string('number_document');
            $table->string('owner');
            $table->string('location_investment');

            $table->string('country_investment')->nullable();
            
            $table->string('institution');
            $table->string('rfc');
            $table->double('balance');
            $table->string('currency');
            
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
        Schema::dropIfExists('investments');
    }
}
