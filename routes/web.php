<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view ('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');
