<?php 

namespace App;
use Input;

class uploadOpt {
public static function upload($fileName,$path,$defaultName=null,$lastofferid) {
    
    $photo=null; 
    $file=Input::file($fileName); 
    if (Input::hasfile($fileName)){
        $destinationPath=$path; 
        $extension = $file -> getClientOriginalExtension(); 
        $name      = $file -> getClientOriginalName();
        $name      = 'OptIn-'.$lastofferid.'.'.$extension;
        $photo     = $destinationPath.'/'.$name;
    $file->move($destinationPath,$name);
    } 
    
    else {$photo=$defaultName;} 
    
       return $photo; 
    }
    public static function upload2($fileName,$path,$defaultName=null,$lastofferid) {
    
    $photo=null; 
    $file=Input::file($fileName); 
    if (Input::hasfile($fileName)){
        $destinationPath=$path; 
        $extension = $file -> getClientOriginalExtension(); 
        $name      = $file -> getClientOriginalName();
        $name      = 'OptOut-'.$lastofferid.'.'.$extension;
        $photo     = $destinationPath.'/'.$name;
    $file->move($destinationPath,$name);
    } 
    
    else {$photo=$defaultName;} 
    
       return $photo; 
    }
  }


