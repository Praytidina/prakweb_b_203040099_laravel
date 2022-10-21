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
            "title" => "Ray Kulon man",
            "slug" => "judul-post-pertama",
            "author" => "Ray Pratidina",
            "body" =>"Seorang anak muda perantau dari ujung jawabarat, datang ke bandung untuk menimba ilmu pengalaman dan untuk meraih cita-cita nya meskipun binguung cita-cita nya ingin menjadi apa.
            tapi walau bingung dan masih dalam mencari jati diri pemuda ini tidak akan menyerah karena itu lah jalan ninja nya"
        ],
        [
            "title" => "Farhan the Maxim man",
            "slug" => "judul-post-kedua",
            "author" => "Farhan abas",
            "body" => "Seorang anak muda dengan julukan Maxim man yang meluanagkan waktu senggang nya dengan menjadi driver Maxim. Berbekal pengalaman mengendarai motor sejauh 1000KM dengan tidak pernah kecelakaan.
            dia berjuang demi menambah uang saku untuk me modif motor yang lebih proper dan masuk cricle Vario "
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
            "title" => "Ray Kulon man",
            "slug" => "judul-post-pertama",
            "author" => "Ray Pratidina",
            "body" => "Seorang anak muda perantau dari ujung jawabarat, datang ke bandung untuk menimba ilmu pengalaman dan untuk meraih cita-cita nya meskipun binguung cita-cita nya ingin menjadi apa.
            tapi walau bingung dan masih dalam mencari jati diri pemuda ini tidak akan menyerah karena itu lah jalan ninja nya"
        ],
        [
            "title" => "Farhan the maxim man",
            "slug" => "judul-post-kedua",
            "author" => "Farhan abas",
            "body" => "Seorang anak muda dengan julukan Maxim man yang meluanagkan waktu senggang nya dengan menjadi driver Maxim. Berbekal pengalaman mengendarai motor sejauh 1000KM dengan tidak pernah kecelakaan.
            dia berjuang demi menambah uang saku untuk me modif motor yang lebih proper dan masuk cricle Vario "
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
        "post" => $new_post
    ]);
});



  
