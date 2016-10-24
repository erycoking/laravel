<?php

use Illuminate\Notification\Notifiable;

class Author extends Eloquent{
	use Notifiable;

	/**
	 *attribute to represent the authors table
	 *
	 */
	protected $table = 'authors';
	/**
	 *The attributes that are mass assignable 
	 *
	 *@var array
	 */
	protected $fillable = [
		'name', 'surname'
	];
}

?>