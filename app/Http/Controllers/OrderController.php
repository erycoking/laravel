<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    public function postOrder(){
    	$rules = array(
    		'address'=>'required'
    		);

    	$validator = Validator::make(Input::all(),$rules);

    	if($validator->fails()){
    		return Redirect::route('cart')->with('error','Address field is required!');
    	}

    	$member_id = Auth::user()->id;
    	$address = Input::get('address');
    	$cart_books = Cart::with('Books')->where('member_id', '=', $member_id)->get();
    	$cart_total = Cart::with('Books')->where('member_id', '=', $member_id)->sum('total');

    	if(!$cart_books){
    		return Redirect::route('cart')->with('error','Your cart is empty');
    	}

    	$order = create(array(
    		'member_id'=>$member_id,
    		'address'=>$address,
    		'total'=>$cart_total
    		));

    	foreach ($cart_books as $order_books) {
    		$order->orderItems()->attach($order_books->book_id,array(
    			'amount'=>$order_books->amount,
    			'price'=>$order_books->Books->price,
    			'total'=>$order_books->Books->price*$order_books->amount
    			))
    	}
    	Cart::where('member_id','=',$member_id)->delete();
    	return Redirect:route('cart')->with('message','Your Order processed successfully');
    }	
    public function getIndex(){
    	$member_id = Auth::user()->id;

    	if(Auth::user()->admin){
    		$orders = Order::all();
    	}else{
    		$orders = Order::with('orderItems')->where('member_id','=',$member_id)->get();
    	}

    	if(!$orders){
    		return Redirect::route('index')->with('error', 'There is no order');
    	}
    	return View::make('oder')->with('orders',$orders);
    }
}
