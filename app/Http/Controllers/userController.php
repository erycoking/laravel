<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userController extends Controller
{
    public function postLogin(){
    	$email = Input::get('email');
    	$password = Input::get('password');

    	if(Auth::attempt(array('email'=>$email, 'password'=>$password))){
    		return Redirect::route('index');
    	}else{
    		return Redirect::route('index')->with('error', 'Either Your password or email is incorrect');
    	}
    }
    public function getLogout(){
    	Auth::logout();
    	return Redirect::route('index');
    }
}
