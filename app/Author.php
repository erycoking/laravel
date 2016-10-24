<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Author extends Model{
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