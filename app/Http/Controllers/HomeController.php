<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\About;
use App\Models\CV;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function home()
    {
        $cv = CV::limit(1)->get();
        $portfolio = Portfolio::get();
        $abouts = About::first();
        return view('frontend.pages.home', compact('portfolio', 'abouts', 'cv'));
    }
}
