@extends('wisata/template/app')

@section('content')
    <section class="Wisata pb-3">
        <div class="container">
          <div class="row justify-content-center mb-5" style="margin-top: 100px">
            <div class="judulCulture col-12 justify-content-center">
              <h1 class="display-3 fw-bold text-center" style="color: white">Wisata di Jawa Tengah</h1>
            </div>
          </div>
          <div class="row justify-content-center pb-5  text-center">
            @foreach ($kategori as $row)
              <div class="col-md-3 my-2">
                <div class="bg-success p-3 rounded-3 mt-2" style="margin-block-end: 30px">
                  <a href="/wisata/{{$row->slug}}" style="text-decoration: none;color:white"><h2>{{$row->nama}}</h2></a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
@endsection
