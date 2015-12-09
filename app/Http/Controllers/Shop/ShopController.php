<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Shop;

use Log;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function getIndex()
    {
        //
        //$shopList=Shop::all();
        //return view('shop', array('shopList'=>$shopList));
        //return view('shop')->withPages(Shop::all());
        //return Response::json($shopList->toArray());

        return view('shop', ['shopList'=>Shop::all()] );
    }*/

    public function index(){
        /*Log::info('This is some useful information.');

        Log::warning('Something could be going wrong.');

        Log::error('Something is really going wrong.');

        error_log('Some message here.');*/

        //Log::info('This is some useful information.');

        $shopList = Shop::all();

        //return view('shop');
        //print 'test';
        //func.print('test');
        //return view('shop', ['shopList'=>Shop::all()] );
        return Response::json($shopList);
        //return view('shop', ['shopList'=>Shop::take(1)->get()] );
        //return view('shop', ['shopList'=>Shop::take(1)->get()] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('shop', ['shopList'=>Shop::all()] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //return view('shop', ['shopList'=>Shop::all()] );
        $shop = Shop::where('_id',$id)->first();

        //Log::info('abc');

        //return view('shop', ['shopList'=>$shopList] );
        return Response::json($shop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //console.log( 'test' );
        error_log('Some message here.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showByEname($ename){
        Log::info('showByEname: '.$ename);
        $shop = Shop::where('ename',$ename)->first();
        return Response::json($shop);
    }
}
