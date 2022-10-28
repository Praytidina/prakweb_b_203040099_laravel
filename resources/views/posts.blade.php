

@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Blog Posts</h1>


    @foreach ($posts as $post)
    <article>
    
        <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
       
        <P>{{ $post->excerpt }} </p>
</article>
        
    @endforeach

    <a class="btn btn-primary btn-m mt-4" href="/">back to Home</a>

@endsection