<?php

use Illuminate\Support\Facades\Route;

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
        "image" => "hapus.jpg"
    ]);
});

Route::get('/blog ', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ray Pratidina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur inventore minus fuga omnis est hic perspiciatis, reiciendis itaque similique tenetur."
            
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Farhan abas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quod labore minima ex numquam, expedita commodi modi a qui, debitis iste iusto ut. Tempora repudiandae, modi quaerat libero nihil officia."
            
        ]
    ]; 
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts

    ]);
});


///singlepost

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ray Pratidina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur inventore minus fuga omnis est hic perspiciatis, reiciendis itaque similique tenetur."
            
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Farhan abas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quod labore minima ex numquam, expedita commodi modi a qui, debitis iste iusto ut. Tempora repudiandae, modi quaerat libero nihil officia."
            
        ]
    ]; 
$new_post= [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;

    }
}

    return view('post', [
        "title" => "single post",
        "post " => $new_post
    ]);
});



  
