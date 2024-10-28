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
Route::get('/services', [App\Http\Controllers\MainController::Class, 'services'])->name('services');
Route::get('/projects', [App\Http\Controllers\MainController::Class, 'projects'])->name('projects');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
