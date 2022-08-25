<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sector');
            $table->string('level')->nullable();
            $table->string('ambit')->nullable();
            $table->string('institution')->nullable();
            $table->string('administrative_unit')->nullable();
            $table->string('company')->nullable();
            $table->string('rfc')->nullable();
            $table->string('area')->nullable();
            $table->string('position');
            $table->text('main_activities');
            $table->string('main_sector')->nullable();
            $table->string('description_sector')->nullable();
            $table->string('location');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('work_experiences');
    }
}
