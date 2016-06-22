<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use DB;
use App\Quotation;

class sponsorController extends Controller
{
    //
    public function show ()
    { 
        
        
        $show = DB::table('sm_sponsor') -> get () ; 
        return View('list-sponsors')-> with ('data', $show); 
       }
       
    public function showcreatesponsors ()
    {
        return View::make ('Sponsor-create');
        }
    
    public function save (Request $request) 
    {
        $post = $request->all(); 
        $v = \Validator::make($request->all(),
            [
               'label' => 'required',
                'Website' => 'required', 
                'login' => 'required', 
                'password' => 'required', 
                'status' => 'required', 
            ]);
        
             
               $data = array (
                      
                     'label' => $post['label'],
                     'Website' => $post['Website'], 
                     'login' => $post['login'], 
                     'password' => $post['password'], 
                    'status' => $post['status'], 
                    
               ); 
               $i = DB::table('sm_sponsor')->insert($data);
               if ($i>0) {
                   \Session::flash('save-message','Record have been save with success');
                   return redirect('list-sponsors');
               }
                
       }
       
    public function delete($id)
    {
        $i =DB::table('sm_sponsor')->where('id',$id)->delete();
        if ($i>0) {
                    \Session::flash('delete-message','Record have been delete success');
                   return redirect('list-sponsors');
               }
            
    }
    public function edit($id) 
    {
        $row =DB::table('sm_sponsor')->where('id',$id)->first();
        return View('sponsor-edit')-> with ('row', $row);
        
    }
    
    public function update (Request $request) 
    {
        $post = $request->all(); 
        $v = \Validator::make($request->all(),
            [
               'label' => 'required',
                'Website' => 'required', 
                'login' => 'required', 
                'password' => 'required', 
                'status' => 'required', 
            ]);
        
             
               $data = array (
                      
                     'label' => $post['label'],
                     'Website' => $post['Website'], 
                     'login' => $post['login'], 
                     'password' => $post['password'], 
                    'status' => $post['status'], 
                    
               ); 
               $i = DB::table('sm_sponsor')->where('id',$post['id'])->update($data);
               if ($i>0) {
                   \Session::flash('update-message','Record have been update with success');
                   return redirect('list-sponsors');
               }
                 }
       
    
     
}

