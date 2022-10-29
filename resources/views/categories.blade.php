

@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post categories</h1>


    @foreach ($categories as $category)
        <ul>
            <li>
            <h2><a href="/category{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
        
    @endforeach

    <a class="btn btn-primary btn-m mt-4" href="/">back to Home</a>

@endsection