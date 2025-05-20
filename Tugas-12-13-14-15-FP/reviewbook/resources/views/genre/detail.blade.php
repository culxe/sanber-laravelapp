@extends('layouts.master')
@section('title')
Detail Genre
@endsection
@section('content')

<h1 class="text-primary"> {{$genre->name}}</h1>
<p>{{$genre->description}}</p>
<a href="/genre" class="btn btn-secondary btn-sm my-3">Kembali</a>
<hr>

<div class="row">
@forelse ($genre->Book as $item)
        <div class="col-4">
            <div class="card">
                <img src="{{asset('image/'.$item->image)}}" class="card-img-top" height="400px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{Str::limit($item->summary, 100)}}</p>
                    <div class="d-grid gap-2">
                        <a href="/book/{{$item->id}}" class="btn btn-primary">Lihat buku</a>
                    </div>
                   
                </div>
            </div>
        </div>

    @empty
        <h1>Tidak ada buku pada genre ini</h1>
    @endforelse
</div>


@endsection