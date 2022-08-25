<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('owner');
            $table->string('type');
            $table->string('patrimonial_regime');
            $table->date('start_date');
            $table->string('name');
            $table->string('rfc');
            $table->string('receive_remuneration');
            $table->double('amount')->nullable();
            $table->string('location');
            $table->string('federal_entity')->nullable();
            $table->string('country')->nullable();
            $table->string('main_sector');
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
        Schema::dropIfExists('representations');
    }
}
