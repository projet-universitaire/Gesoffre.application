<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\controller;
use app\Http\Controllers\DownloadsController;
use App\Http\Requests;
use File;  
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
            $labels=$post['Creative'];//récupérer la valeur de creative label 
           // dd(count($labels));
            for($j=0;$j<count($labels);$j++) //boucle pour ajouté plus de creatives  
            {
                $optInfile=$post['optinfile'][$j];   //récupérer la valeur de optinfile 
                $optoutfile=$post['optoutfile'][$j];//récupérer la valeur de optoutfile
                
                //dd($optInfile);
                
                    $upload=array (
                   'label'=>$post['Creative'][$j],//tableau creative  label 
                   'srcIn'=>uploadOpt::upload($optInfile,'assets/img/cr/','no image',$i,$j),
                   'srcOut'=>uploadOpt::upload2($optoutfile,'assets/img/cr/','no image',$i,$j),
                   'offer_id' => $i,
                   'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                   'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                   
                   
                   
                   ); 
               $c=DB::table('sm_creative')->insert($upload);
            }
            if ($c>0) {
              \Session::flash('save-message','Record have been saved with success');
                   return redirect('list-Offer');
            }
       }
      
    
       
     public function showlist (){
        
     $show = DB::table('sm_offer') -> get () ;   
     return View::make ('Offer/list-offers')-> with ('data', $show);
     
     }
      public function delete($id)
    {
       $row=  \App\Sm_offer::find($id);
       $creative=$row->creative;
       $files = array($creative->srcIn, $creative->srcOut);
       File::delete($files);
       
     //  File::delete($creative->srcIn, $creative->srcOut);
       
       $row->delete();
    //    File::delete($filename);
        if ($row>0) {
                    \Session::flash('delete-message','Record have been deleted with success');
                   return redirect('list-Offer');
               }
        
    }

    public function preveiw ($id){
        $row=  \App\Sm_offer::find($id);
        //$row =DB::table('sm_offer')->where('id',$id)->first();
        $sposors= \App\Sm_sponsor::find($row->sponsor_id);
        $categorie= \App\Sm_categorie::find($row->category_id);
        $creative=$row->creative;
      //  $creative->srcIn->encode('data-url');
        return View::make ('Offer/preview')
                -> with ('row', $row)
                -> with ('sposors', $sposors)
                -> with ('categorie', $categorie)
                -> with ('creative', $creative);    
    }
    function download($filename){
  
    //$iamgename=$row->srcIn;
    //$file_path =  public_path('/assets/img/cr/'.$filename);
   // $img =  public_path ('/assets/img/cr/'.$filename);
   
   return response()->download(public_path('/assets/img/cr/'.$filename));
} 
    public function edit($id) {
    
        $row=  \App\Sm_offer::find($id);
    // $row =DB::table('sm_offer')->where('id',$id)->first();
    // $sponsors= \App\Sm_sponsor::find($row->sponsor_id);
    // $categorie= \App\Sm_categorie::find($row->category_id);
       $categorie = DB::table('sm_categorie') -> get () ;
       $sponsors = DB::table('sm_sponsor') -> get () ;
       $creative=$row->creative;
      return View('Offer/offer-edit')
              -> with ('row', $row)
              -> with ('sponsors', $sponsors)
              -> with ('categorie', $categorie)
              -> with ('creative', $creative);
                   
    }
    public function update() {
    
        
    }
   }
