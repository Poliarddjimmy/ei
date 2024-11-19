<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Category::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function show(Category $service)
    {
        return view('services.show', compact('service'));
    }
        
}
