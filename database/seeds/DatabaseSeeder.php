<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(BeersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BreweriesTableSeeder::class);
        
        Model::reguard();
    }
}
