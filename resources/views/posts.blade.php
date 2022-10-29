

@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>


    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
    
        <h2><a href="/post/{{ $post->slug }" class="text-decoration-none">{{ $post->title }}</a></h2>

        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"></a> {{ $post->author->username }} <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none"> {{ $post->category->username}}</a></p>
        
       
        <P>{{ $post->excerpt }} </p>

        <a href="/post/{{ $post->slug }}"class="text-decoration-none">Read more..</a>
</article>
        
    @endforeach

    <a class="btn btn-primary btn-m mt-4" href="/">back to Home</a>

@endsection