<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
	}

}
