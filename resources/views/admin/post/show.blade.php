@extends('sb-admin/app')

@section('title','Sianture-Show')

@section('post','active')

@section('main','show')

@section('main-active','active')

@section('content')
    <a href="/post/{{$post->id}}/edit" class="btn btn-primary fas fa-edit btn-sm">Edit</a>
    <a href="/post" class="btn btn-secondary  fas fa-arrow-left btn-sm">Kembali</a>
    <div class="card mt-3"> 
        <img src="/upload/post/{{$post->sampul}}"  height="450px" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$post->judul}}</h5>
            <p class="card-text">{!!$post->konten!!}</p>
            <p class="card-text"><small class="text-muted">{{$post->created_at->diffforhumans()}}</small></p>
        </div>
    </div>
@endsection