<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \p4\User::firstOrCreate(['email' => 'jill@harvard.edu']);
    $user->name = 'Jill';
    $user->email = 'jill@harvard.edu';
    $user->password = \Hash::make('helloworld');
    $user->save();

    $user = \p4\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
    $user->name = 'Jamal';
    $user->email = 'jamal@harvard.edu';
    $user->password = \Hash::make('helloworld');
    $user->save();

    }
}