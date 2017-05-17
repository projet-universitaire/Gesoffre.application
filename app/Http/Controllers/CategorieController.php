<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use DB;
use App\Quotation;

class CategorieController extends Controller
{
    //
    public function show (){
        
       
        return View::make ('Categories/Categorie-create');
        
    }
    public function showlist (){
        
       $show = DB::table('sm_categorie') -> get () ; 
        return View('Categories/list-categories')-> with ('data', $show); 
        
    }
    
     public function save (Request $request) 
    {
        $post = $request->all(); 
        $v = \Validator::make($request->all(),
            [
               'label' => 'required', 
            ]);
        
             
               $data = array (
                      
                     'label' => $post['label'],
                   'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                   'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                        
                    
               ); 
               $i = DB::table('sm_categorie')->insert($data);             
               if ($i>0) {
                   \Session::flash('save-message','Record have been save with success');
                   return redirect('Categorie-list');
               }
                
       } 
       
       public function delete($id)
    {
        $i =DB::table('sm_categorie')->where('id',$id)->delete();
        if ($i>0) {
                    \Session::flash('delete-message','Record have been delete with success');
                   return redirect('Categorie-list');
               }
            
    }
    public function edit($id) 
    {
        $row =DB::table('sm_categorie')->where('id',$id)->first();
        return View('Categories/Categorie-edit')-> with ('row', $row);
        
    }
    
    public function update (Request $request) 
    {
        $post = $request->all(); 
        $v = \Validator::make($request->all(),
            [
               'label' => 'required',
                
            ]);
        
             
               $data = array (
                      
                     'label' => $post['label'],
                     'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
               ); 
               $i = DB::table('sm_categorie')->where('id',$post['id'])->update($data);
               if ($i>0) {
                   \Session::flash('update-message','Record have been update with success');
                   return redirect('Categorie-list');
               }
    }
     
}
