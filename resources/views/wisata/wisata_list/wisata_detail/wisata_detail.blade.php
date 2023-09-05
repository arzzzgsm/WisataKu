@extends('wisata/wisata_list/wisata_detail/template/app')

@section('content')
<section class="WisataDetail">
  <div class="container">

    <div class="row justify-content-center mt-4">
      <div class="col text-center">
        <img  src="../../upload/post/{{$artikel->sampul}}"   style="border:3px solid black" class="img-responsive w-50" alt="">
      </div>
    </div>
    <div class="row ">
      <div class="col my-3 py-5">
        <div class="w-50 text-light bg-dark  p-3 mx-auto text-center rounded-3">
          <h2>{{$artikel->judul}}</h2>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col">
        <div class="text-light bg-dark p-3 rounded-3">
          <p>{!!$artikel->konten!!}</p>
        </div>
      </div>
    </div>

      <a href="/wisata/{{$kategori->slug}}">
        <img src="../../front/image/previous.png" alt="">
      <a>




</section>

{{-- <section class="cultureListSianture">
  <img src="../../front/image/imgCultureList4.png"  alt="imageIntro4">
  <div class="container">
    <div class="card mb-3">
        <img src="../../upload/post/{{$artikel->sampul}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$artikel->judul}}</h5>
          <p class="card-text">{{$artikel->konten}}</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <a href="/culture/culture-list">
        <img src="../../front/image/previous.png" alt="">
      <a>

</section> --}}

@endsection
