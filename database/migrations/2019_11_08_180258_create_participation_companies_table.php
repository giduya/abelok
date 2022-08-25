<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationCompaniesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participation_companies', function (Blueprint $table) {
			$table->increments('id');

			$table->string('owner');
			$table->string('company');
			$table->string('company_rfc');
			$table->double('percentage');

			$table->string('type_participacion');
			$table->string('description_type_participacion')->nullable();
			$table->string('main_sector');
			$table->string('description_sector')->nullable();
			$table->string('receive_remuneration');
			$table->double('amount')->nullable();
			$table->string('location');
			$table->string('country')->nullable();
			$table->string('federal_entity')->nullable();

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
		Schema::dropIfExists('participation_companies');
	}
}
