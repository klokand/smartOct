<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('SearchIndexSeeder');
	}

}

class SearchIndexSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('searchIndex')->delete();
		DB::table('searchIndex')->insert(array('url' => 'Safeguard Newborn Stroller','type' => 'move', 'description' => 'The QuickSmart Newborn Safeguard Stroller features patented* Intergrated Rollaway Prevention. Suitable from newborn to 24kgs, this fully featured premium stroller makes movement a breeze with its award winning design and Patented compact footprint.'));
		DB::table('searchIndex')->insert(array('url' => 'Easyfold Stroller','type' => 'move', 'description' => 'The QuickSmart Easyfold Stroller is unlike any other four wheel stroller. With the revolutionary QuickSmart folding system it is ready to go in just seconds!'));
		DB::table('searchIndex')->insert(array('url' => 'Backpack Stroller','type' => 'move', 'description' => 'The QuickSmart Backpack Stroller is light and compact enough to fold neatly into its own comfortable backpack. In fact most airlines find it very cabin-friendly. How travel savvy is that?'));
		DB::table('searchIndex')->insert(array('url' => 'Easyfold Travel Cot','type' => 'relax', 'description' => 'The QuickSmart Travel Cot is ideal for people on the go, perfect for short and long trips away from home! Include BONUS on the go zip up carry bag.'));
		DB::table('searchIndex')->insert(array('url' => 'Accessory-Weather-Shield','type' => 'move', 'description' => 'The Weather-Shield perfect companion to the QuicksmartTM Easy Fold Stroller providing protection from the cold and wet weather when out with baby.'));
		DB::table('searchIndex')->insert(array('url' => 'Accessory-Boot-Cover','type' => 'move', 'description' => 'Boot Cover. Weather can be unpredictable. Be ready for anything in seconds with our Boot Cover designed just for the QuickSmart Easy Fold Stroller.'));
		DB::table('searchIndex')->insert(array('url' => 'Accessory-Caddy','type' => 'move', 'description' => "The Stroller Caddy attaches easily to the QuickSmart Easy Fold Stroller for plenty of essentials storage (like baby's bottle) for parents on the go."));
		DB::table('searchIndex')->insert(array('url' => 'Accessory-Footmuff','type' => 'move', 'description' => "Baby, it's cold outside. So we designed the Foot Muff specially for our QuickSmart Easy Fold Stroller. It wraps baby head to toe in a cosy cocoon."));
		DB::table('searchIndex')->insert(array('url' => 'Accessory-Comfort%20Pack','type' => 'move', 'description' => 'We designed the Comfort Pack just for the QuickSmart Easy Fold Stroller. It ensures five star luxury and comfort for precious little passengers.'));
	}

}