<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClassicAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_classic_ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',200);
			$table->string('slug',250)->unique();
			$table->integer('location_id')->unsigned();
			$table->foreign('location_id')
			      ->references('id')->on('locations')
			      ->onDelete('cascade')
			      ->onUpdate('cascade');
			$table->string('advertiser_email', 250);
			$table->string('advertiser_name', 250);
			$table->string('advertiser_telephone', 25);
			$table->string('month',2);
			$table->string('year',4);
			$table->text('description');
			$table->double('price', 10, 2)->nullable();
			$table->integer('status')->default(0);
			$table->integer('classic_ad_id')->unsigned();
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
		Schema::drop('user_classic_ads');
	}

}
