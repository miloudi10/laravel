<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function page(){
        return 'hello world !' ;
    }
    public function welcome(){
        return view('welcome' );
    }
    //
   
    
}
