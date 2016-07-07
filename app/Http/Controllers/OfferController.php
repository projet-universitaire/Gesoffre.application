<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\controller;
use App\Http\Requests;
use DB;
use App\uploadOpt; 


class OfferController extends Controller
{
    //
    public function show (){
        
        $show = DB::table('sm_categorie') -> get () ;
        $shows = DB::table('sm_sponsor') -> get () ;
        return View::make ('Offer/Offer-create')-> with ('data', $show)-> with ('datas', $shows);
        
    }
    public function showcreative (){
        
      
        return View::make ('Offer/creative-create');
        
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
                'category_id' => 'required', 
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
                'category_id' => $post['Categorie'],
                'country' => $post['Country'],
                'status' => $post['Status'],
                'payout' => $post['payout'],
                'payouttype' => $post['paymentmethode'], 
                'forms' => $post['forms'],
                'subjects' => $post['subjects'],
                'OptIn' => $post['OptIn'], 
                'OpOut' => $post['OptOut'],
                'hasSuppFile' => $post['Suppfile'],
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                   
                
                   
               ); 
               
               $i = DB::table('sm_offer')->insertGetId($data);

               $upload= array (
                   
                   'label'=>$post['Creative'],
                   'srcIn'=>uploadOpt::upload('optinfile','../resources/assets/image_uploaded','no image',$i),
                   'srcOut'=>uploadOpt::upload2('optoutfile','../resources/assets/image_uploaded','no image',$i),
                   'offer_id' => $i,
                   'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                   'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                   
                   
                   
                   );
                DB::table('sm_creative')->insertGetId($upload);
         
               return redirect()->back();
                   
       }
        public function savecategorie (Request $request) 
    {
            
     //   $post = $request->all(); 
      //  $v = \Validator::make($request->all(),
         //   [
          //     'label' => 'required',
               
          //  ]);
         //  ://    $data = array (
                   
             //      'label' => $post['Creative'],
            //   );
               
            //   $i = DB::table('sm_creative')->insert($data);
               $post = $request->all();
               $upload= array (
                   
                   'label'=>$post['Creative'],
                   'srcIn'=>uploadOpt::upload('optinfile','../resources/assets/image_uploaded','no image'),
                   'srcOut'=>uploadOpt::upload('optoutfile','../resources/assets/image_uploaded','no image'),
                   'offer_id' => 6
                   
                   
                   
                   );
                $id = DB::table('sm_creative')->insertGetId($upload);
         
               return redirect()->back(); 
        
               
         
       }
       
     public function showlist (){
        
     $show = DB::table('sm_offer') -> get () ;   
     return View::make ('Offer/list-offers')-> with ('data', $show);
     
     }
      public function delete($id)
    {
        $i =DB::table('sm_offer')->where('id',$id)->delete();
        if ($i>0) {
                    \Session::flash('delete-message','Record have been deleted with success');
                   return redirect('list-Offer');
               }
        
    }

    public function preveiw (){
        
      
        return View::make ('Offer/preview');
        
    }
}
