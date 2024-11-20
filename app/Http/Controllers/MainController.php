<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class MainController extends Controller
{
    public function welcome()
    {
        $projects = Project::all();
        $rProjects = Project::orderBy('created_at', 'desc')->inRandomOrder()->take(5)->get();
        return view('welcome', compact('projects', 'rProjects'));
    }
    
    public function about()
    {
        $services = Category::all();
        return view('about', compact('services'));
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function services()
    {
        $services = Category::all();
        return view('services.index', compact('services'));
    }
    
    public function projects()
    {
        return view('projects');
    }
    
    public function tagsFromCategory(Request $request)
    {
        $category = Category::find($request->category_id);
        
        if ($category) {
            $tags = $category->tags;
            return response()->json(['tags' => $tags]);
        } else {
            return response()->json(['message' => 'Category not found'], 404);
        }
    }
}
