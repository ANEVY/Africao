<?php

namespace App\Http\Controllers\Africao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //services page
    public function services()
    {
        return view('pages.services');
    }
    // about page
    public function about()
    {
        return view('pages.about');
    }
    // contact page
    public function contact()
    {
        return view('pages.contact');
    }
}
