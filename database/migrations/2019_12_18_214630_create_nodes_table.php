<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {

            $table->increments('id');
            $table->string('subdomain')->nullable();
            $table->string('logo')->nullable();

            $table->date('start_date_initial');
            $table->date('end_date_initial');
            
            $table->date('start_date_modification');
            $table->date('end_date_modification');

            $table->date('start_date_conclusion');
            $table->date('end_date_conclusion');

            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('municipality_id')->unsigned();
            $table->foreign('municipality_id')->references('id')->on('municipalities');

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
        Schema::dropIfExists('nodes');
    }
}
