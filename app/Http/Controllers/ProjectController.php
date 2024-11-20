<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(\Route::currentRouteName() == "dashboard.projects" ) {
            $projects = Project::paginate(10);
            $categories = Category::all();
            $tags = Category::pluck('tags')->flatten()->all();
    
            return view('dashboard.projects.index', compact('projects', 'categories', 'tags'));
        } else {
            $projects = Project::inRandomOrder()->get();
            return view('projects.index', compact('projects'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $input = $request->validated();
                
        \DB::beginTransaction();
        try {
            Project::create($input);
        } catch (\Throwable $th) {
            \DB::rollBack();
            Toastr::error('Something went wrong:'. $th->getMessage(), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()
                ->with('error', 'Error creating project');
        }
        \DB::commit();
        Toastr::success('project added successfully', 'Success');
        return redirect()->route('dashboard.projects') ->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
