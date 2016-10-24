<?php

use App\user;
use Illuminate\database\Seeder;

class UsersTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->delete();
		
		user::create(array(
			'email'=>'member@email.com',
			'password'=>Hash::make('password'),
			'name'=>'john',
			'admin'=>0
			));
		user::create(array(
			'email'=>'admin@store.com',
			'password'=>Hash::make('adminpassword'),
			'name'=>'Jennifer Taylor',
			'admin'=>1
			));
	}
}

?>