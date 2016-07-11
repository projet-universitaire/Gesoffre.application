<?php 

namespace App;
use Input;

class uploadOpt {
public static function upload($file,$path,$defaultName=null,$lastofferid,$key) {
    
    $photo=null; 
    if ($file->isValid()){
        $destinationPath=$path; 
        $extension = $file -> getClientOriginalExtension(); 
        $name      = 'OptIn'.$key.'-'.$lastofferid.'.'.$extension; //save the name of the image 
        $photo     = $name;
    $file->move($destinationPath,$name);
    } 
    
    else {$photo=$defaultName;} 
    
       return $photo;  // return the name of the image uploaded  
    }
    public static function upload2($file,$path,$defaultName=null,$lastofferid,$key) {
    
     
    $photo=null; 
    if ($file->isValid()){
        $destinationPath=$path; 
        $extension = $file -> getClientOriginalExtension(); 
        $name      = 'OptOut'.$key.'-'.$lastofferid.'.'.$extension;
        $photo     = $name; //save the name of the image 
    $file->move($destinationPath,$name);
    } 
    
    else {$photo=$defaultName;} 
    
       return $photo;  // return the name of the image uploaded  
    }
  }


