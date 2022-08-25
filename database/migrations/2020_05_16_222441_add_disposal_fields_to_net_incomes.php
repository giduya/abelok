<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDisposalFieldsToNetIncomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('net_incomes', function (Blueprint $table) {
            $table->string('disposal_of_property')->nullable();
            $table->string('disposal_of_property_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('net_incomes', function (Blueprint $table) {
            $table->dropColumn('disposal_of_property');
            $table->dropColumn('disposal_of_property_type');
        });
    }
}
