@extends('layouts.master')
@section('title')
  Home
@endsection

@section('content')

@if (session('success'))
  <div class="alert alert-success">
      {{ session('success')}}
  </div>
@endif

@if (session('danger'))
  <div class="alert alert-danger">
      {{ session('danger')}}
  </div>
@endif

<div class="container text-center mb-5">
<h1>Goodbook - Discover Your Next Favorite Book</h1>
</div>
@auth
<h1> Welcome, {{Auth()->user()->name}}
  @if (Auth()->user()->profile)
      ({{Auth()->user()->profile->age}} Tahun)
  @else
      
  @endif
</h1> 
@endauth
    <h2></h2>
    <p>Honest reviews by real readers — just like you.</p>
    <h3>Quick Feature Highlights</h3>
    <ul>
      <li>📚 Explore Books - Dive into a growing collection of titles across all genres.</li>
      <li>🏷️ Browse by Genre -  Filter your way through our shelf.</li>
      <li>✍️ Share Your Thoughts - Leave reviews and comment using your own account.</li>
    </ul>
    <h3> <a href="/register">Here</a> to join Goodbook</h3>
 @endsection