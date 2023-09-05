@extends('wisata/wisata_list/template/app')

@section('content')
  <section class="WisataList">
    <div class="container">
      <div class="row ">
        <div class="judulWisata col-12 mb-5">
          <h1 class="display-3 fw-bold text-center" style="color: white">{{$kategori->nama}}</h1>
        </div>
        <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
          <div class="carousel-inner ">
            <div class="carousel-item active ">
              @foreach ($artikel as $row)
                  <div class="row py-5">
                    <div class="col text-center p-3">
                      <img class="img-fluid w-25 " style="border:3px solid black" src="/upload/post/{{$row->sampul}}" alt="{{$row->judul}}">
                      <button class="m-4 btn btn-warning w-50" type="button"><a href="/wisata/{{$kategori->slug}}/{{$row->slug}}">{{$row->judul}}</a></button>
                    </div>
                  </div>
              @endforeach
            </div>
          </div>
          {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button> --}}
        </div>
      </div>
      <a href="/wisata" style="padding-bottom: 70px">
        <img src="../front/image/previous.png" alt="">
      <a>
  </section>
@endsection
