<?php

class UsersTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->delete();
		
		users::create(array(
			'email'=>'member@email.com',
			'password'=>Hash::make('password'),
			'name'=>'john',
			'admin'=>0
			));
		users::create(array(
			'email'=>'admin@store.com',
			'password'=>Hash::make('adminpassword'),
			'name'=>'Jennifer Taylor',
			'admin'=>1
			));
	}
}

?>