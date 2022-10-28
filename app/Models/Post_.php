<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
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

    Public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firtswhere('slug', $slug);
    }
}
