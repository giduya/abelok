<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_benefits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('beneficiary');
            $table->string('type');
            $table->string('granting_type');
            $table->string('granting_name');
            $table->string('granting_rfc');
            $table->string('type_reception');
            $table->string('description_reception')->nullable();
            $table->double('amount');
            $table->string('currency');
            $table->string('main_sector');
            $table->string('description_sector')->nullable();
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
        Schema::dropIfExists('private_benefits');
    }
}
