<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('debts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('owner');
        $table->string('type');
        $table->string('other_type')->nullable();
        $table->string('contract_number');
        $table->date('debt_date');
        $table->double('original_amount');
        $table->string('currency');
        $table->double('balance');
        $table->string('third_type')->nullable();
        $table->string('third_name')->nullable();
        $table->string('third_rfc')->nullable();
        $table->string('credit_grantor');
        $table->string('grantor_name');
        $table->string('grantor_rfc');
        $table->string('debt_location');
        $table->string('country')->nullable();
        $table->string('clarification')->nullable();
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
        Schema::dropIfExists('debts');
    }
}
