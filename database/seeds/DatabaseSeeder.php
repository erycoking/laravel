<?php

//use database\seeds\UsersTableSeeder;
//use database\seeds\AuthorsTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
         $this->call(UsersTableSeeder::class);
         $this->command->info('User table seeded!');
         $this->call(AuthorsTableSeeder::class);
         $this->command->info('Authors table seeded!');
    }
}
