<?php

namespace App\Http\Controllers;

class Controller
{
    public function __construct(){
       
    }
    
    static public function checkTheName($value='')
    {
        print_r('Hello');
    }
    static public function base_url(){
        return url()->current();
    }
   
  
}
