<?php
namespace App\Services\ServiceImpl;

use DB;
use App\Services\ServiceInter\Search;

class SearchImpl implements Search {  
      
    public function searchInfo() {
    	$users = DB::table('user')->paginate(5);
    	return $users;
    }  
    
}