<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClassicAdImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_classic_ad_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image',255);
			$table->integer('user_classic_ad_id')->unsigned();
			$table->integer('status')->default(0);
			$table->foreign('user_classic_ad_id')
			      ->references('id')->on('user_classic_ads')
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
		Schema::drop('user_classic_ad_images');
	}

}
