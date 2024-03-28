<?php

namespace App\Http\Controllers;

class Controller
{

   
    static public function checkTheName($value='')
    {
        print_r('Hello');
    }
    static public function base_url(){
        return url()->current();
    }
}
