<?php

use Illuminate\Database\Seeder;

class BreweriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breweries')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'user_id' => 1,
        'brewery_name' => 'Magic Hat',
        'Location' => 'Burlington, VT',
        'description' => 'Very quirky brewery. There\'s a guided tour or you can go on a self guided tour. A video presentation gives most of the details about the process, and you get to wonder around and see the... unique artwork. You then get to try four beers at the bar.',
        'rating' =>'9.5',
        'brewery_image' => 'http://img2.10bestmedia.com/Images/Photos/296764/IMG-5214_54_990x660.jpg'
    ]);
        
         DB::table('breweries')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'user_id' => 2,
        'brewery_name' => 'Magic Hat',
        'Location' => 'Burlington, VT',
        'description' => 'Very quirky brewery. There\'s a guided tour or you can go on a self guided tour. A video presentation gives most of the details about the process, and you get to wonder around and see the... unique artwork. You then get to try four beers at the bar.',
        'rating' =>'9.5',
        'brewery_image' => 'http://img2.10bestmedia.com/Images/Photos/296764/IMG-5214_54_990x660.jpg'
    ]);
    }
}
