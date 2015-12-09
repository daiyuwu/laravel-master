<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/showWelcome', 'HomeController@showWelcome');

Route::get('/shop_old',function(){
	$shopList=App\Shop::all();
	//print_r($shop);
	//return 'what';
	return view('shop', array('shopList'=>$shopList));
});

Route::get('/shops/ename/{ename}' , 'Shop\ShopController@showByEname');
//Route::controller('/shops', 'Shop\ShopController');
Route::resource('/shops', 'Shop\ShopController');
//Route::get('user', 'UserController@showProfile'); //¦r²Å¦ê
//Route::get('user', array('before' => 'old', 'uses' => 'UserController@showProfile')); //??
/*Route::get('user', function() //?¥]¨ç?
{
    return 'Hello World';
});*/
Route::get('/{ename}','GlobalController@showByEname');