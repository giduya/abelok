<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrustsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trusts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner');
            $table->string('type');
            $table->string('rfc');
            $table->string('regime');
            $table->string('type_participation');
            $table->string('regime_trustor_type');
            $table->string('trustor_name');
            $table->string('trustor_rfc');
            $table->string('main_sector');
            $table->string('location');
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
        Schema::dropIfExists('trusts');
    }
}
