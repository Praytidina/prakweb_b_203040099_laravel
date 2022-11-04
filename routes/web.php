<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ ', function () {
    return view('Home', [
        "title" => "Home",
        "active" => "Home"
    ]);
});




Route::get('/about ', function () {
    return view('about', [
        "title" => "about",
        "active" => "about",
        "name" => "Ray pratidina",
        "email" => "Raypz642@gmail.com.id",
        "image" => "senja.jpg"
        
    ]);
});
    
Route::get(' /posts', [PostController::class, 'index']);



///singlepost

Route::get('post/{post:slug}', [PostController::class, 'show']);


//newroute
Route::get('categories',function() { 
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => category::all()
    ]);
});




  
