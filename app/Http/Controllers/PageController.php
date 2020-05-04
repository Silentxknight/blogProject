<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function Index()
   {
        return view('new/hello');
   }

   public function AboutUs()
   {
        return view('new.aboutus');
   }

   public function Services()
   {
        return view('new.services');
   }
   public function ere(){
    return '404';
    }
}

