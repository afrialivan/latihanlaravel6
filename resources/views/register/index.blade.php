@extends('layouts.main')

@section('container')
    
<form action="/register" method="POST">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nama Lengkap</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp">
    @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
    @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection