<?php
namespace App\Services\Factory;

use App\Services\ServiceInter\Search;
use App\Services\ServiceImpl\SearchImpl;

class SimpleFactory {  
      
    public static function createSearch() {
    	$search = new SearchImpl;
    	return $search->searchInfo();
    }  
    
}