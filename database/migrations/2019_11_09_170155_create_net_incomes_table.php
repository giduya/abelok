<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('net_incomes', function (Blueprint $table) {
        $table->increments('id');
        $table->string('public_monthly_net_salary');
        $table->string('others_monthly_income')->nullable();
        $table->string('industrial_activity')->nullable();
        $table->string('company_name')->nullable();
        $table->string('business_type')->nullable();
        $table->string('financial_activity')->nullable();
        $table->string('instrument_profit')->nullable();
        $table->string('other_instrument_profit')->nullable();
        $table->string('professional_services')->nullable();
        $table->string('service_type')->nullable();
        $table->string('other_income')->nullable();
        $table->string('other_income_type')->nullable();
        $table->string('monthly_net_income')->nullable();
        $table->string('spouse_economic_dependents_monthly_net_income')->nullable();
        $table->string('total_monthly_net_income')->nullable();
        $table->text('clarification')->nullable();
			  $table->integer('declaration_id')->unsigned();
			  $table->foreign('declaration_id')->references('id')->on('declarations');
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
        Schema::dropIfExists('net_incomes');
    }
}
