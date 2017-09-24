<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registrations.create');
    }
    public function store()
    {

    	//validate the form
    	$this->validate(request(), [

    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    		]);

    	// save the user

    	$user = User::create([ 
		'name' => request('name'),
		'email' => request('email'),
		'password' => bcrypt(request('password'))
		]);
    	//login the user

    	auth()->login($user);

    	//redirect to home

    	return redirect('/');
    }
}

