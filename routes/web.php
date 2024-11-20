<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\MainController::Class, 'welcome'])->name('welcome');
Route::get('/about', [App\Http\Controllers\MainController::Class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\MainController::Class, 'contact'])->name('contact');
Route::get('/tags-from-category', [App\Http\Controllers\MainController::Class, 'tagsFromCategory'])->name('tagsFromCategory');

Route::resource('/services', App\Http\Controllers\ServiceController::class, [
    'names' => [
        'index'   => 'services',
        'show'    => 'services.show',
    ]
])->only(['index', 'show']);

Route::resource('/projects', App\Http\Controllers\ProjectController::class, [
    'names' => [
        'index'   => 'projects',
        'show'    => 'projects.show',
    ]
])->only(['index', 'show']);

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    
    Route::resource('/users', App\Http\Controllers\UserController::class, [
        'names' => [
            'index'   => 'dashboard.users',
            'store'   => 'dashboard.users.store',
            'show'    => 'dashboard.users.show',
            'edit'    => 'dashboard.users.edit',
            'update' => 'dashboard.users.update',
        ]
    ])->only(['index', 'store', 'show', 'edit', 'update']);
    
    Route::resource('categories', App\Http\Controllers\CategoryController::class, [
        'names' => [
            'index'   => 'dashboard.categories',
            'create'  => 'dashboard.categories.create',
            'store'   => 'dashboard.categories.store',
            'edit'    => 'dashboard.categories.edit',
            'update' => 'dashboard.categories.update',
            'destroy' => 'dashboard.categories.destroy',
        ]
    ])->only(['index', 'create','store', 'edit', 'update', 'destroy']);
    
    Route::resource('projects', App\Http\Controllers\ProjectController::class, [
        'names' => [
            'index'   => 'dashboard.projects',
            'create'  => 'dashboard.projects.create',
            'store'   => 'dashboard.projects.store',
            'edit'    => 'dashboard.projects.edit',
            'update' => 'dashboard.projects.update',
            'destroy' => 'dashboard.projects.destroy',
        ]
    ])->only(['index', 'create','store', 'edit', 'update', 'destroy']);

});