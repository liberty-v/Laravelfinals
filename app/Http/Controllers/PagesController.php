<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;



class PagesController extends Controller
{
    public function index(){
        $title="Emro's Boarding";
        return view('pages.index',compact('title'));
    }


    public function about(){
        $title="About Emro's Boarding House";
        return view('pages.about',compact('title'));
    }

   
    
}

