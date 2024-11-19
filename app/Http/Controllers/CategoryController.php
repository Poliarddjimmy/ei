<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);

        return view('dashboard.categories.index', compact('categories'));
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
    public function store(StoreCategoryRequest $request)
    {
        $input = $request->validated();
        
        \DB::beginTransaction();
        try {
            Category::create($input);
        } catch (\Throwable $th) {
            \DB::rollback();
            Toastr::error('Something went wrong:'. $th->getMessage(), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->withErrors($th->getMessage())->withInput();
        }
        \DB::commit();
        Toastr::success('Category added successfully', 'Success');
        return redirect()->route('dashboard.categories')->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $input = $request->validated();
        
        \DB::beginTransaction();
        try {
            $category->update($input);
        } catch (\Throwable $th) {
            \DB::rollback();
            Toastr::error('Something went wrong:'. $th->getMessage(), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->withErrors($th->getMessage())->withInput();
        }
        \DB::commit();
        Toastr::success('Category updated successfully', 'Success');
        return redirect()->route('dashboard.categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        \DB::beginTransaction();
        try {
            $category->delete();
        } catch (\Throwable $th) {
            \DB::rollback();
            Toastr::error('Something went wrong:'. $th->getMessage(), 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        \DB::commit();
        Toastr::success('Category deleted successfully', 'Success');
        return redirect()->route('dashboard.categories')->with('success', 'Category deleted successfully');
    }
}
