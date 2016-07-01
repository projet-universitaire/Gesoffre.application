<?php
//offer controller

    Route::get('offer/create',
                array(
                    'as' => 'offer/create',
                    'uses' => 'OfferController@show'
                )
            );
    
Route::post('saveo','OfferController@save');
  
    


// end offer controller 


//the sponsor controller 
Route::post('saves','sponsorController@save');
Route::get('deletesponsor/{id}','sponsorController@delete');
Route::get('editsponsor/{id}','sponsorController@edit');
Route::post('updates','sponsorController@update');
Route::get('/', 'dashboardController@show');
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
//end sponsor Controlller

//the Categorie controllers
Route::get('Categorie-create','CategorieController@show');
Route::get('Categorie-list','CategorieController@showlist');
Route::post('save','CategorieController@save');

Route::get('/deletecategorie/{id}','CategorieController@delete');

Route::get('/editcategorie/{id}','CategorieController@edit');
Route::post('update','CategorieController@update');
//end the Categorie controllers
