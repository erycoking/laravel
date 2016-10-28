<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_book extends Model
{
     /**
     *attributes that represents the books table
     *
     *@var array
     */
    protected $table = 'order_books';
    /**
     *attributes that are mass assignalble
     *
     *@var array
     */
    protected $fillable = [
    ];
    /**
     *relations between author and books
     *
     *function
     */
    // public function Books(){
    // 	return $this->belongsToMany('Book')->withPivot('amount', 'total');
    // }
}
