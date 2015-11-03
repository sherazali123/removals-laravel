<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassicAdBenefitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classic_ad_benefits', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('number_in_row');
			$table->text('description');
			$table->integer('classic_ad_id')->unsigned();
			$table->integer('status')->default(0);
			$table->foreign('classic_ad_id')
			      ->references('id')->on('classic_ads')
			      ->onDelete('cascade')
			      ->onUpdate('cascade');
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
		Schema::drop('classic_ad_benefits');
	}

}
