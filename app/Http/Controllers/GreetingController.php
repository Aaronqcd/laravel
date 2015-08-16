<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class GreetingController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($name)
    {
        //return view('user.profile', ['user' => User::findOrFail($id)]);
        //return view('greeting', ['name' => 'James']);
    	return view('greeting', ['name' => $name]);
    }
}