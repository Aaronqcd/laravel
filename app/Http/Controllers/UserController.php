<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Jobs\SendEmail;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Services\Pagination\Pagination;
use App\Services\Factory\SimpleFactory;


class UserController extends Controller
{
    /**
     * Show a list of all of the users.
     *
     * @return Response
     */
    public function index()
    {
    	$users = SimpleFactory::createSearch();
    	$users->setPath('user');
    	$page = new Pagination($users);
    	$links = $page->render();
    	
        return view('user', ['users' => $users, 'links' => $links]);
    }
    
    /**
     * Search user by user's id.
     *
     * @return Response
     */
    public function findById($id)
    {
    	$users = DB::select('select * from user where id=?', [$id]);
    
    	return view('userEdit', ['users' => $users]);
    }
    
    /**
     * Update user's info.
     *
     * @return Response
     */
    public function update(Request $request)
    {
    	$name = $request->input('name');
    	$job = $request->input('job');
    	$phone = $request->input('phone');
    	$id = $request->input('id'); 
    	DB::select('update user set name=?, job=?, phone=? where id=?',
    	[$name, $job, $phone, $id]);
    	$user = new User();
    	$user = User::findOrFail($id);
    	$this->dispatch(new SendEmail($user));
    	
    	return Redirect::to('user');
    }
    
    /**
     * Add user.
     *
     * @return Response
     */
    public function add(Request $request)
    {
    	$name = $request->input('name');
    	$job = $request->input('job');
    	$phone = $request->input('phone');
    	$email = $request->input('email');
    	DB::insert('insert into user (name,job,phone,email) values 
    			(?,?,?,?)', [$name,$job,$phone,$email]);
    
    	return Redirect::to('user');
    }
    
    /**
     * Delete user by user's id.
     *
     * @return Response
     */
    public function deleteById($id)
    {
    	$users = DB::delete('delete from user where id=?', [$id]);
    
    	return Redirect::to('user');
    }
}