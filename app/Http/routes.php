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
Route::post('save','sponsorController@save');
Route::get('deletesponsor/{id}','sponsorController@delete');
Route::get('editsponsor/{id}','sponsorController@edit');
Route::post('update','sponsorController@update');
Route::get('/', function () {
    return view('welcome');
});

Route::get('offre',
                array(
                    'as' => 'offer',
                    'uses' => 'OfferController@show'
                )
            );
Route::get('list-sponsors',
                array(
                    'as' => 'list-sponsors',
                    'uses' => 'sponsorController@show'
                )
            );

Route::get('create-sponsors',
                array(
                    'as' => 'create-sponsors',
                    'uses' => 'sponsorController@showcreatesponsors'
                )
            );

