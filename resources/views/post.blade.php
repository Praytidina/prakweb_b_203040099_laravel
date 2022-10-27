
@extends('layouts.main')

@section('container')

    
   
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
        
    </article>
   

<a class="btn btn-primary btn-lg mt-4"href="/blog">back to Posts</a>
<a class="btn btn-primary btn-lg mt-4" href="/">back to Home</a>
    @endsection