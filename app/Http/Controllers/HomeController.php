<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function beranda(){
    	return view ('site.home');
    }

    public function about(){
    	return view ('site.about');
    }

    public function photography(){
    	return view ('site.photography');
    }

    public function contact(){
        return view ('site.contact');
    }

    public function event(){
        return view ('site.event');
    }
}
