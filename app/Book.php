<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable;
	/**
     *attributes that represents the books table
     *
     *@var array
     */
	protected $table = 'books';
    /**
     *attributes that are mass assignalble
     *
     *@var array
     */
    protected $fillable =[
    	'title', 'isbn', 'cover', 'price', 'author_id'
    ];
    /**
     *relations between author and books
     *
     *function
     */
    public function Author(){
    	return $this->belongsTo('Author');
    }
}
