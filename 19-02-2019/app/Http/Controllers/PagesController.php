<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function home()
    {
	$title='Home';
        //return view('myhome',compact("title"));
        return view('myhome')->with("name",$title);
		
    }
	
	 public function services()
    {
        return view('services');
    }
	
	 public function about()
    {
        return view('about');
    }
}
