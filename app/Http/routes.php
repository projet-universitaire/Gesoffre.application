<?php
//offer controller 

    Route::get('offer/create',
                array(
                    'as' => 'offer/create',
                    'uses' => 'OfferController@show'
                )
            );
    
    


// end offer controller 


//the sponsor controller 
Route::post('save','sponsorController@save');
Route::get('deletesponsor/{id}','sponsorController@delete');
Route::get('editsponsor/{id}','sponsorController@edit');
Route::post('update','sponsorController@update');
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
