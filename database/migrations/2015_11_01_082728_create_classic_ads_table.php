<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassicAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classic_ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('number_in_row');
			$table->string('title',100);
			$table->string('slug',200)->unique();
			$table->string('image',150);
			$table->text('description');
			$table->integer('status')->default(0);
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
		Schema::drop('classic_ads');
	}

}
