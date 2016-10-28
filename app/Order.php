<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     /**
     *attributes that represents the books table
     *
     *@var array
     */
    protected $table = 'orders';
    /**
     *attributes that are mass assignalble
     *
     *@var array
     */
    protected $fillable = [
    	'member_id', 'address', 'total'
    ];
    /**
     *relations between author and books
     *
     *function
     */
    public function Books(){
    	return $this->belongsToMany('Book')->withPivot('amount', 'total');
    }
}
