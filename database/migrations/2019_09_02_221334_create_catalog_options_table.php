<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value');
            $table->string('label');
            $table->integer('catalog_id')->unsigned();
            $table->foreign('catalog_id')->references('id')->on('catalogs');
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
        Schema::dropIfExists('catalog_options');
    }
}
