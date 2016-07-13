<?php

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        //DB::table('users')->delete();
        //User::create(['email' => 'foo@bar.com']);
        DB::table('users')->insert([
            'name' => 'Mahesh',//str_random(10),
            'email' => 'themaheshe1@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
