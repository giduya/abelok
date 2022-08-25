<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level')->nullable();
            $table->string('institution');
            $table->string('career')->nullable();
            $table->string('status');
            $table->string('document');
            $table->date('document_date');
            $table->string('institution_location');
            $table->string('period')->nullable();
            $table->string('type_period')->nullable();
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
        Schema::dropIfExists('scholarships');
    }
}
