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

//Route::get('/', function () {
//    return view('welcome');
//});

//BACKEND PAGE

Route::get('/contact', [App\Http\Controllers\HOUSE::class, 'contact'])->name('backend.contact');
Route::resource('/House',\App\Http\Controllers\HOUSE::class);
Route::resource('/Cottage', \App\Http\Controllers\Construction::class);


//FRONTEND PAGE!!!!!

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('Frontend.home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('Frontend.about');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('Frontend.services');
Route::get('/project', [App\Http\Controllers\HomeController::class, 'project'])->name('Frontend.project');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('Frontend.blog');
Route::get('/projectdetails', [App\Http\Controllers\HomeController::class, 'projectdetails'])->name('Frontend.projectdetails');
Route::get('/blogdetails', [App\Http\Controllers\HomeController::class, 'blogdetails'])->name('Frontend.blogdetails');
Route::get('/email', [App\Http\Controllers\HomeController::class, 'email'])->name('Frontend.email');
