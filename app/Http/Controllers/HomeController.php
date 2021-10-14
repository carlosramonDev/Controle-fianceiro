<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
      /*HOME*/

    public function index() {
        
        
        return view('welcome');
    }

    
}