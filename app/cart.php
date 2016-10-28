<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    /**
     *attributes that represents the books table
     *
     *@var array
     */
    protected $table = 'cart';
    /**
     *attributes that are mass assignalble
     *
     *@var array
     */
    protected $fillable = [
    	'member_id', 'book_id', 'amount', 'total'
    ];
    /**
     *relations between author and books
     *
     *function
     */
    public function Books(){
    	return $this->belongsTo('Book','book_id');
    }
}
