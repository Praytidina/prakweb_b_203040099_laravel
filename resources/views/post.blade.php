
@extends('layouts.main')

@section('container')

    
   
    <article>
        <h2>{{ $post->title }}</h2>

        <p>By. <a href="/authors/{{ $post->author->username }} " class = "text-decoration-none"> {{ $post->author->name   }}</a> <a href="/categories/ {{ $post->category->slug   }}"class = "text-decoration-none"> {{ $post->category->name}}</a></p>
        
        {!! $post->body !!}
        
    </article>
   

<a class="btn btn-primary btn-lg mt-4"href="/posts">back to Posts</a>
<a class="btn btn-warning btn-lg mt-4" href="/">back to Home</a>
    @endsection

