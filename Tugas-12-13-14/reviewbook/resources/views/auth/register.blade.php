@extends('layouts.master')
@section('title')
Register
@endsection
@section('content')

<form method="POST" action="/register">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

    @csrf

    
  <div class="mb-3 w-50 mx-auto">
    <label class="form-label">Username</label>
    <input type="text" name="name" class="form-control">
   </div>
  <div class="mb-3 w-50 mx-auto">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" >
  </div>
  <div class="mb-3 w-50 mx-auto">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" >
  </div>
  <div class="mb-3 w-50 mx-auto">
    <label class="form-label">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" >
  </div>
 <div class="mb-3 w-50 mx-auto">
  <button type="submit" class="btn btn-success w-100 mx-auto">Register</button>
 </div>
</form>

@endsection