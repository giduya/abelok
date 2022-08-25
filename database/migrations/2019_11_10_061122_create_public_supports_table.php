<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_supports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('beneficiary');
            $table->string('description_beneficiary')->nullable();
            $table->string('name_program');
            $table->string('institution');
            $table->string('government_level');
            $table->string('type_benefit');
            $table->string('type_reception');
            $table->double('amount');

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
        Schema::dropIfExists('public_supports');
    }
}
