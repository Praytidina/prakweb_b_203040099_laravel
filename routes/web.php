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
        "title" => "Home"
    ]);
});




Route::get('/about ', function () {
    return view('about', [
        "title" => "about",
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
        'categories' => category::all()
    ]);
});

Route :: get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category','author')
        
    ]);
});

route ::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Posts By Author : $author->name",
        'posts' => $author->posts->load('category','author'),
       
    ]);

});



  
