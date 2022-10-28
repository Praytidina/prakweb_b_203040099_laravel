
@extends('layouts.main')

@section('container')

    
   
    <article>
        <h2>{{ $post->title }}</h2>
        
        {!! $post->body !!}
        
    </article>
   

<a class="btn btn-primary btn-lg mt-4"href="/posts">back to Posts</a>
<a class="btn btn-primary btn-lg mt-4" href="/">back to Home</a>
    @endsection

