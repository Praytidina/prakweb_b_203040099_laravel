@extends('layouts.main')

@section('container')
<div class="container px-4 ">
<h1 class="text-center">Halaman About<h1>
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">
     <img src="img/{{ $image }}" alt="{{ $name }}" width="150" class="rounded-circle">
     <h5>{{ $name }}<h5>  
    <p>{{ $email }}</p>
   
    
     </div>
    </div>
  </div>
</div>

@endsection