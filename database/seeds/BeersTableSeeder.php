<?php

use Illuminate\Database\Seeder;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'user_id' => 1,
        'brewery_name' => 'Sam Adams',
        'beer_name' => 'Octoberfest',
        'beer_type' => 'Amber',
        'description' => 'Seasonal beer for fall. Medium bodied with great flavor. Love the reddish color to it!',
        'rating' =>'9',
        'beer_label' => 'http://www.warrenbeer.com/warren/images/products/beer/sam_adams/octoberfest/logo.jpg'
    ]);
        
         DB::table('beers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'user_id' => 2,
        'brewery_name' => 'Harpoon',
        'beer_name' => 'IPA',
        'beer_type' => 'IPA',
        'description' => 'It\'s an IPA, but it\'s not as hoppy as the average IPA. Great go to beer.',
        'rating' =>'9',
        'beer_label' => 'http://amoskeagbeverages.com/wp-content/uploads/2014/08/HARPOON-IPA.jpg'
    ]);
        
        DB::table('beers')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'user_id' => 2,
        'brewery_name' => 'Pabst Blue Ribbon',
        'beer_name' => 'Pabst Blue Ribbon',
        'beer_type' => 'Light lager',
        'description' => 'Like drinking water, but good for those times you don&#39;t want real beer',
        'rating' =>'4',
        'beer_label' => 'http://1.bp.blogspot.com/-BkbjbNIHK1g/VM_4YUyLAEI/AAAAAAAAa8w/itX9qRfkZGQ/s1600/pbr.png'
    ]);
    }
}