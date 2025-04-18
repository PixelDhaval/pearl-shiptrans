<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function errorPage()
    {
        return view('pages/errorPage');
    }
    
    public function about()
    {
        return view('pages/about');
    }
    
    public function faq()
    {
        return view('pages/faq');
    }
}
