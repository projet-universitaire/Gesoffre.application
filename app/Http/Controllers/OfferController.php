<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use DB;

class OfferController extends Controller
{
    //
    public function show (){
        
        $show = DB::table('sm_categorie') -> get () ;
        $shows = DB::table('sm_sponsor') -> get () ;
        return View::make ('Offer/Offer-create')-> with ('data', $show)-> with ('datas', $shows);
        
    }
    
    public function save (Request $request) 
    {
        $post = $request->all(); 
        $v = \Validator::make($request->all(),
            [
               'type' => 'required',
                'label' => 'required', 
                'sponsor_id' => 'required', 
                'SponsorOfferId' => 'required', 
                'Categorie_id' => 'required', 
                'country' => 'required',
                'status' => 'required', 
                'payout' => 'required', 
                'payouttype' => 'required', 
                'forms' => 'required', 
                'subjects' => 'required',
                'OptIn' => 'required', 
                'OpOut' => 'required', 
                'hasSuppFile' => 'required', 
                
            ]);
        
             
               $data = array (
                    
                'type' => $post['type'],
                'label' => $post['label'],
                'sponsor_id' => $post['sponsor'],
                'SponsorOfferId' => $post['sponsoroffer'],
                'Categorie_id' => $post['Categorie'],
                'country' => $post['Sountry'],
                'status' => $post['Status'],
                'payout' => $post['payout'],
                'payouttype' => $post['paymentmethode'], 
                'forms' => $post['forms'],
                'subjects' => $post['subjects'],
                'OptIn' => $post['OptIn'], 
                'OpOut' => $post['OptOut'], 
                'hasSuppFile' => $post['SuppFile'],
                
                   
                   
               ); 
               $i = DB::table('sm_offer')->insert($data);
               
               
               
               
               if ($i>0) {
                   \Session::flash('save-message','Record have been save with success');
                   return redirect('list-sponsors');
               }
               
               
                
       }
     
}
