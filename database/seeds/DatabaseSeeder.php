<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Location;
use App\ClassicAd;
use App\ClassicAdBenefit;
use App\ClassicAdCondition;
use App\ClassicAdProcess;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

	    $this->call('UserTableSeeder');

        $this->call('LocationTableSeeder');

	    $this->call('ClassicAdTableSeeder');
	}

}

/**
  * Seed User Table	
  *
  */

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(['name' => 'Sheraz Ali', 'email' => 'sheraz.ali342@gmail.com', 'password' => 'sheraz']);
    }

}

/**
  * Seed Location Table 
  *
  */

class LocationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('locations')->delete();

        Location::create(['location' => 'Seoul', 'code' => 'seo']);
    }

}

/**
  * Seed User Table	
  *
  */

class ClassicAdTableSeeder extends Seeder {

    public function run()
    {
        DB::table('classic_ads')->delete();
        DB::table('classic_ad_benefits')->delete();
        DB::table('classic_ad_conditions')->delete();
        DB::table('classic_ad_processes')->delete();

        $classic_ads = [
        	['number_in_row' => 1, 'title' => 'Moving Day', 'slug' => 'moving-day', 'image' => 'moving_day.png', 'description' => 'MIK is now offering a quick and convenient service we call “Moving Day” where you can rent our movers to transport a few items across town. If you’re selling a couch or a TV and just need to transport it from one end of the city to the other, Moving Day is ideal for you. The same day service is very quick, convenient and affordable. The larger the group on Moving Day, the cheaper the costs',
        		  	'benefits' => [
        																										
        						],
        			'conditions' => [
        								['number_in_row' => 1, 'description' => 'Only truck rental service and item delivery provided'],
        								['number_in_row' => 2, 'description' => 'Only offered the last Sunday of each month'],
        								['number_in_row' => 3, 'description' => 'Only available around the Seoul, Daejeon, and Busan areas'],
        								['number_in_row' => 4, 'description' => 'Services are only offered within the same city (ex. Daejeon to Daejeon, not Daejeon to Seoul)'],
        								['number_in_row' => 5, 'description' => 'Can’t ride with the driver'],
        								['number_in_row' => 6, 'description' => 'The exact delivery times are not set'],
        							],
        			'processes' => [
        								['number_in_row' => 1, 'description' => 'Visit our website at <a href="http://www.moveinkorea.com" target="_blank">http://www.moveinkorea.com</a> and fill out a truck rental service form. (Please make sure that you have requested the last Sunday of the month.)'],																			
        							]
        	],
        	['number_in_row' => 2, 'title' => 'City to City', 'slug' => 'city-to-city', 'image' => 'city_to_city.png', 'description' => 'MIK is now offering a reasonable and efficient service we call "City to City". Moving to another city, especially if the distance is very far from your current city, can be very costly. What if you could share the cost of moving with someone? Find your moving buddy and get a huge discount.',
        		  	'benefits' => [
        								['number_in_row' => 1, 'description' => 'Huge discount (almost half price)'],																			
        						],
        			'conditions' => [
        								['number_in_row' => 1, 'description' => 'Need another person who wants to transport their items on the same day from the same city, near the same city or on the way to the city you’re moving to.'],
        								['number_in_row' => 2, 'description' => 'If you and your moving buddy have the same destination, the items both of you have must fit in a one-ton truck.'],																		
        							],
        			'processes' => [
        								['number_in_row' => 1, 'description' => 'Visit our website at <a href="http://www.moveinkorea.com" target="_blank">http://www.moveinkorea.com</a> and fill out the appropriate service form. Leave a message saying you would like to use City to City service in the Notes space. (Paid mover service customers cannot use this service.)'],																			
        							]
        	],
        	['number_in_row' => 3, 'title' => 'Furniture', 'slug' => 'furniture', 'image' => 'furniture.png', 'description' => 'This space is used for selling or donating furniture. Do not post any items that are not related to furniture. If someone posts something unrelated to furniture, the post will be deleted, and the user will be banned.',
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	],
        	['number_in_row' => 4, 'title' => 'Cell phone', 'slug' => 'cell-phone', 'image' => 'cell_phones.png', 'description' => 'This space is used for selling or donating cell phone. Do not post any items that are not related to cell phone. If someone posts something unrelated to cell phone, the post will be deleted, and the user will be banned.',
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	],
        	['number_in_row' => 5, 'title' => 'Electronics', 'slug' => 'electronics', 'image' => 'electronics.png', 'description' => 'This space is used for selling or donating electronics. Do not post any items that are not related to electronics. If someone posts something unrelated to electronics, the post will be deleted, and the user will be banned.', 
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	],
        	['number_in_row' => 6, 'title' => 'Car and Bike', 'slug' =>  'car-and-bike', 'image' => 'car_and_bike.png', 'description' => 'This space is used for selling or donating car and bike. Do not post any items that are not related to car and bike. If someone posts something unrelated to car and bike, the post will be deleted, and the user will be banned.',
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	],
        	['number_in_row' => 7, 'title' => 'Miscellaneous', 'slug' => 'miscellaneous', 'image' => 'miscellaneous.png', 'description' => 'This space is used for selling or donating items that are not listed in above categories. Do not post any illegal ads (drugs, sexual stuff). If someone posts an illegal ad, the post will be deleted, and the user will be banned.',
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	]
        ];

        // start add adding following content into the database

        foreach ($classic_ads as $ad_key => $ad) {
        	
        	// create new classic ad
        	$new_ad = new ClassicAd();
        	$new_ad->number_in_row = $ad['number_in_row'];
        	$new_ad->title = $ad['title'];
        	$new_ad->slug = $ad['slug'];
        	$new_ad->image = $ad['image'];
        	$new_ad->description = $ad['description'];
        	$new_ad->save();

        	if(!empty($ad['benefits'])){
        		foreach ($ad['benefits'] as $benefit_key => $benefit) {
        			
        			// create new ad benefit	
        			$new_benefit = new ClassicAdBenefit();
        			$new_benefit->number_in_row = $benefit['number_in_row'];
        			$new_benefit->description = $benefit['description'];
        			$new_benefit->classic_ad_id = $new_ad->id;
        			$new_benefit->save();
        		}
        	}

        	if(!empty($ad['conditions'])){
        		foreach ($ad['conditions'] as $condition_key => $condition) {
        			
        			// create new ad condition	
        			$new_condition = new ClassicAdCondition();
        			$new_condition->number_in_row = $condition['number_in_row'];
        			$new_condition->description = $condition['description'];
        			$new_condition->classic_ad_id = $new_ad->id;
        			$new_condition->save();
        		}
        	}

        	if(!empty($ad['processes'])){
        		foreach ($ad['processes'] as $process_key => $process) {
        			
        			// create new ad process	
        			$new_process = new ClassicAdProcess();
        			$new_process->number_in_row = $process['number_in_row'];
        			$new_process->description = $process['description'];
        			$new_process->classic_ad_id = $new_ad->id;
        			$new_process->save();
        		}
        	}
        }

    }

}