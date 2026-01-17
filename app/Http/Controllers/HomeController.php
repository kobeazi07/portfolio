<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function home(){
        $portfolio = Portfolio::get();
     $abouts = About::first();
        return view('frontend.pages.home',compact('portfolio','abouts'));
    }
}
