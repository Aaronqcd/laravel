<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Jobs\SendEmail;
use App\User;
//use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::select('select * from user');

        return view('user', ['users' => $users]);
    }
    
    /**
     * Search user by user's id.
     *
     * @return Response
     */
    public function findById($id)
    {
    	$users = DB::select('select * from user where id=?', [$id]);
    	//$user = DB::table('user')->where('id', $id);
    
    	return view('userEdit', ['users' => $users]);
    }
    
    /**
     * Update user's info.
     *
     * @return Response
     */
    public function update(Request $request)
    {
    	/* $name = Input::get('name');
    	$job = Input::get('job');
    	$phone = Input::get('phone');
    	$id = Input::get('id'); */
    	$name = $request->input('name');
    	$job = $request->input('job');
    	$phone = $request->input('phone');
    	$id = $request->input('id'); 
    	DB::select('update user set name=?, job=?, phone=? where id=?',
    	[$name, $job, $phone, $id]);
    	$user = new User();
    	$user = User::findOrFail($id);
    	$this->dispatch(new SendEmail($user));
    	//$user = DB::table('user')->where('id', $id);
    	
    	$userController = new UserController;
    	return $userController->index();
    }
}