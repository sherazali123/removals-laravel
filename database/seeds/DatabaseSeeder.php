<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

use App\Location;
use App\ClassicAd;

use App\ClassicAdBenefit;
use App\ClassicAdCondition;
use App\ClassicAdProcess;

use App\RentalService;
use App\PurchaseService;

use App\Item;

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

        $this->call('ItemTableSeeder');

        $this->call('RentalServicesTableSeeder');
        $this->call('PurchaseServicesTableSeeder');

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
  * Seed Rental services
  *
  */

class RentalServicesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('rental_services')->delete();

        RentalService::create(['number_in_row' => 1,'title' => 'Boxes', 'price' => 100, 'image' => 'boxes.png', 'status' => 0]);
        RentalService::create(['number_in_row' => 2,'title' => 'Boxes with books', 'price' => 200, 'image' => 'boxes_with_books.png', 'status' => 0]);
        RentalService::create(['number_in_row' => 3,'title' => 'Moving cart', 'price' => 250, 'image' => 'cart.png', 'status' => 0]);
        RentalService::create(['number_in_row' => 4,'title' => 'Single bed cover', 'price' => 500, 'image' => 'single_bed.png', 'status' => 0]);
        RentalService::create(['number_in_row' => 5,'title' => 'Double bed cover', 'price' => 700, 'image' => 'double_bed.png', 'status' => 0]);
        RentalService::create(['number_in_row' => 6,'title' => 'Queen bed cover', 'price' => 800, 'image' => 'queen_bed.png', 'status' => 0]);
    }

}

/**
  * Seed Purchase services
  *
  */

class PurchaseServicesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('purchase_services')->delete();

        PurchaseService::create(['number_in_row' => 1,'title' => 'Moving Tape', 'price' => 100, 'image' => 'tape.png', 'status' => 0]);
        PurchaseService::create(['number_in_row' => 2,'title' => 'Cardboard Boxes', 'price' => 250, 'image' => 'cardboard.png', 'status' => 0]);
        PurchaseService::create(['number_in_row' => 3,'title' => 'Gloves', 'price' => 150, 'image' => 'gloves.png', 'status' => 0]);
        PurchaseService::create(['number_in_row' => 4,'title' => 'Bubble Wraps', 'price' => 700, 'image' => 'bubble_wrap.png', 'status' => 0]);
    }

}

/**
  * Seed Items
  *
  */

class ItemTableSeeder extends Seeder {

    public function run()
    {
        DB::table('items')->delete();

        $items = array(
                array('number_in_row' => 1, 'title' => 'Small Box', 'image' => '/img/design-img/items/1.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 2, 'title' => 'Big Box', 'image' => '/img/design-img/items/2.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 3, 'title' => 'Small Luggage (less than 20 inch)', 'image' => '/img/design-img/items/3.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 4, 'title' => 'Big Luggage (more than 20 inch)', 'image' => '/img/design-img/items/4.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 5, 'title' => 'Small Shelf (one person moveable)', 'image' => '/img/design-img/items/5.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 6, 'title' => 'Big Shelf (two person moveable)', 'image' => '/img/design-img/items/6.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 7, 'title' => 'TV Stand', 'image' => '/img/design-img/items/7.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 8, 'title' => 'King Bed (two person moveable)', 'image' => '/img/design-img/items/8.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 9, 'title' => 'Queen Bed (two person moveable)', 'image' => '/img/design-img/items/9.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 10, 'title' => 'Single Bed (one person moveable)', 'image' => '/img/design-img/items/10.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 11, 'title' => 'Wardrobe', 'image' => '/img/design-img/items/11.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 12, 'title' => 'Small Drawer (one person moveable)', 'image' => '/img/design-img/items/12.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 13, 'title' => 'Big Drawer (two person moveable)', 'image' => '/img/design-img/items/13.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 14, 'title' => 'Chair', 'image' => '/img/design-img/items/14.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 15, 'title' => '1 Seater (one person moveable)', 'image' => '/img/design-img/items/15.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 16, 'title' => '2 Seater (two person moveable)', 'image' => '/img/design-img/items/16.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 17, 'title' => 'Dressing Table', 'image' => '/img/design-img/items/17.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 18, 'title' => 'Desks & Table (one person moveable)', 'image' => '/img/design-img/items/18.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 19, 'title' => 'Desk & Table (two person moveable)', 'image' => '/img/design-img/items/19.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 20, 'title' => 'Small Cabinet', 'image' => '/img/design-img/items/20.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 21, 'title' => 'Big Cabinet (two person moveable)', 'image' => '/img/design-img/items/21.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 22, 'title' => 'Small Refrigerator', 'image' => '/img/design-img/items/22.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 23, 'title' => 'Big Refrigerator', 'image' => '/img/design-img/items/23.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 24, 'title' => '2-Door Refrigerator', 'image' => '/img/design-img/items/24.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 25, 'title' => 'Small TV', 'image' => '/img/design-img/items/25.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 26, 'title' => 'Big TV', 'image' => '/img/design-img/items/26.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 27, 'title' => 'Wall TV', 'image' => '/img/design-img/items/27.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 28, 'title' => 'Laptop/Computer', 'image' => '/img/design-img/items/28.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 29, 'title' => 'Washing Machine', 'image' => '/img/design-img/items/29.png', 'type' => 0, 'status' => 0),
                array('number_in_row' => 30, 'title' => 'Microwave', 'image' => '/img/design-img/items/30.png', 'type' => 0, 'status' => 0),
            );
            

            foreach ($items as $item) {
                Item::create($item);
            }

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
        	['number_in_row' => 1, 'type' => 0, 'title' => 'Moving Day', 'slug' => 'moving-day', 'image' => 'moving_day.png', 'description' => 'MIK is now offering a quick and convenient service we call “Moving Day” where you can rent our movers to transport a few items across town. If you’re selling a couch or a TV and just need to transport it from one end of the city to the other, Moving Day is ideal for you. The same day service is very quick, convenient and affordable. The larger the group on Moving Day, the cheaper the costs',
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
        	['number_in_row' => 2, 'type' => 0, 'title' => 'City to City', 'slug' => 'city-to-city', 'image' => 'city_to_city.png', 'description' => 'MIK is now offering a reasonable and efficient service we call "City to City". Moving to another city, especially if the distance is very far from your current city, can be very costly. What if you could share the cost of moving with someone? Find your moving buddy and get a huge discount.',
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
        	['number_in_row' => 3, 'type' => 1, 'title' => 'Furniture', 'slug' => 'furniture', 'image' => 'furniture.png', 'description' => 'This space is used for selling or donating furniture. Do not post any items that are not related to furniture. If someone posts something unrelated to furniture, the post will be deleted, and the user will be banned.',
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	],
        	['number_in_row' => 4, 'type' => 1, 'title' => 'Cell phone', 'slug' => 'cell-phone', 'image' => 'cell_phones.png', 'description' => 'This space is used for selling or donating cell phone. Do not post any items that are not related to cell phone. If someone posts something unrelated to cell phone, the post will be deleted, and the user will be banned.',
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	],
        	['number_in_row' => 5, 'type' => 1, 'title' => 'Electronics', 'slug' => 'electronics', 'image' => 'electronics.png', 'description' => 'This space is used for selling or donating electronics. Do not post any items that are not related to electronics. If someone posts something unrelated to electronics, the post will be deleted, and the user will be banned.', 
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	],
        	['number_in_row' => 6, 'type' => 1, 'title' => 'Car and Bike', 'slug' =>  'car-and-bike', 'image' => 'car_and_bike.png', 'description' => 'This space is used for selling or donating car and bike. Do not post any items that are not related to car and bike. If someone posts something unrelated to car and bike, the post will be deleted, and the user will be banned.',
        		  	'benefits' => [
        						],
        			'conditions' => [
        							],
        			'processes' => [
        							]
        	],
        	['number_in_row' => 7, 'type' => 1, 'title' => 'Miscellaneous', 'slug' => 'miscellaneous', 'image' => 'miscellaneous.png', 'description' => 'This space is used for selling or donating items that are not listed in above categories. Do not post any illegal ads (drugs, sexual stuff). If someone posts an illegal ad, the post will be deleted, and the user will be banned.',
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
            $new_ad->type = $ad['type'];
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