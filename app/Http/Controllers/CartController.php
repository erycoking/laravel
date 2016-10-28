<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    public function postAddToCart(){
    	$rules = array(
    		'amount'=>'required|numeric',
    		'book'=>'required|numeric|exists:books,id';
    		);
    	$validator = Validator::make(Input::all(),$rules);

    	if($validator->fails()){
    		return Redirect::route('index')->with('error', 'The book could not be added to your cart');
    	}
    	cart::create(array(
    		'member_is'=>$member_id,
    		'book_id'=>$book_id,
    		'amount'=>$amount,
    		'total'=>$total
    		));
    	return Redirect::route('cart');
    }
    public function getIndex(){
    	$member_id = Auth::user()->id;
    	$cart_books = cart::with('Books')->where('member_id','=',$member_id);
    	$cart_total = cart::with('Books')->where('mamber_id',$member_d)->sum('total');
    	if(!$cart_books){
    		return Redirect()->route('index')->with('error', 'Your cart is empty');
    	}
    	return view::make(cart)
    	->with('cart_books',$cart_books)
    	->with('cart_total', $cart_total);
    }
    public function getDelete($id){
    	$cart = Cart::find($id)->delete();
    	return Redirect::route('cart');
    }
}
