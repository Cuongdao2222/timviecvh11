<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function Home()
    {
      
        return view('frontend.index_list_job');
    }
    
}
