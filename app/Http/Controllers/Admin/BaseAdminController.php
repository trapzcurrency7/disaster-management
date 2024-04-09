<?php

namespace App\Http\Controllers\Admin;

class BaseAdminController
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
