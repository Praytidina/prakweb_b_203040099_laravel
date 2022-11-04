@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
<div class="col-md-4 lg-5">
<main class="form-registration w-100 m-auto">
<h1 class="h3 mb-3 fw-normal text-center">Registration form</h1>
  <form action="/register" method="post">
    @csrf
    <img class="mb-4" src="../img/monitor.png " alt="" style="display:block; margin:auto;" width="100" height="100">
 
    <div class="form-floating">
      <input type="text" name="name" class="form-control rounded-top @error('name')
      is-invalid @enderror" id="name" placeholder="Name" required  required value="{{ old('name') }}">
      <label for="name">Name</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    <div class="form-floating">
      <input type="text" name="username" class="form-control @error('username')
      is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
      <label for="username">Username</label>
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') 
      is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
      <label for="email">Email address</label>
    </div>
    <label for="email">Email</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    <div class="form-floating">
      <input type="password" name="password" class="form-control  @error('password') 
      is-invalid @enderror rounded-bottom" id=password placeholder="Password" required>
      <label for=password>Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

  </form>
  <small class="d-block text-center mt-3">All ready registed?? <a href="/login">Login</small>
</main>
</div>
</div>

@endsection