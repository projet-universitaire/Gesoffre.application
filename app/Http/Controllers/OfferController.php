<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;

class OfferController extends Controller
{
    //
    public function show (){
        
       
        return View::make ('Offer/Offer-create');
        
    }
     
}
