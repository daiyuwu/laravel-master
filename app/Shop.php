<?php

namespace App;

use DB;
use App\Shop;
use Moloquent as Eloquent;

class Shop extends Eloquent{
	protected $connection = 'mongodb';
	protected $collection='shop';

	/*public function getFirstOne(){
		return $this->take(1)->get();
	}*/
}