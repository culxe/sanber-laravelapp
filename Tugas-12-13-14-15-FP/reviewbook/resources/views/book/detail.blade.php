@extends('layouts.master')
@section('title')
Detail Book
@endsection
@section('content')


<img src="{{asset('image/'. $book->image)}}" width="30%" alt="">
<h1 class="text-primary">{{$book->title}}</h1>
<h5 class="text-primary">Stok: {{$book->stok}}</h5>
<p>{{$book->summary}}</p>
<a href="/book" class="btn btn-secondary btn-sm">Kembali</a>

<hr>
<h1>List Komentar</h1>
@forelse ($book->comments as $item)
<div class="card my-3">
    <div class="card-header">
        {{$item->owner->name}}
    </div>
<div class="card-body">
    <p>{{$item->content}}</p>
</div>


</div>
@empty
    
@endforelse

<hr>

<h3>Buat Komentar</h3>
@auth
    

<form method="POST" action="/comments/{{$book->id}}" enctype="multipart/form-data">
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

  <div class="mb-3">
    <textarea name="content" class="form-control" 
    placeholder="isi komentar.." cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Comment</button>
</form>
@endauth
@endsection