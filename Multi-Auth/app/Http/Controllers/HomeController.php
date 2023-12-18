<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {  
        if(Auth::id())
        {
       

            $usertype = Auth::user()->usertype;
            if  ($usertype =="user")
            {
                return view('user');
            }
            else if ($usertype =="admin")
            {
                return view('admin');
            }
            else if ($usertype =="ceo")
            {
                return view('ceo');
            }
           
            

        }
        
    }
}
