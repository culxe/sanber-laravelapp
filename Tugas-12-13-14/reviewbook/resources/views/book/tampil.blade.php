@extends('layouts.master')
@section('title')
Daftar Buku
@endsection
@section('content')

@auth
    @if (Auth()->user()->role==='admin')
    <a href="/book/create" class="btn btn-primary my-3">Tambah</a>
    @endif
@endauth

<div class="row">

    @forelse ($book as $item)
        <div class="col-4">
            <div class="card my-2">
                <img src="{{asset('image/'.$item->image)}}" class="card-img-top" height="400px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <span class="badge bg-success mb-2">{{$item->genre->name}}</span>
                    <p class="card-text">{{Str::limit($item->summary, 100)}}</p>
                    <div class="d-grid gap-2">
                        <a href="/book/{{$item->id}}" class="btn btn-primary">Lihat buku</a>
                    </div>
                    @auth
                    @if (Auth()->user()->role==='admin')
                    <div class="row mt-3">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="/book/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                        <div class="col">
                            <form action="/book/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="d-grid gap-2">
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </div>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    @empty
        <h1>Belum ada buku</h1>
    @endforelse

</div>

@endsection