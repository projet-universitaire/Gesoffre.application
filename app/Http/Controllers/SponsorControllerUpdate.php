<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;


class sponsorControllerUpdate extends Controller
{
    
 
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
                   \Session::flash('message','Record have been update with success');
                   return redirect('list-sponsors');
               }
                 }
       
    
     
}

