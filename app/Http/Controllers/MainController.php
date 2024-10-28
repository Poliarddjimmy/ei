<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function services()
    {
        return view('services.index');
    }
    
    public function projects()
    {
        return view('projects');
    }
}
