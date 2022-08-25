<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomicilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domiciles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('declaration_id')->unsigned();
            $table->string('location');
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
            $table->text('clarification')->nullable();
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
        Schema::dropIfExists('domiciles');
    }
}
