@extends('home/template/app')

    @section('content')
    <section class="atasWisata">
        <div class="container" style="margin-top: 6%">
          <div class="row">
            <div class="col fs-3 judul" style="color: white;">
              Hi , Welcome To
            </div>
          </div>
          <div class="row" style="margin: 1%">>
            <div class="col-lg display-3 fw-bold judul" style="color: white;">
              Wonderful Tour of Central Java
            </div>
          </div>
          <div class="row mt-3 pb-5">
            <div class="col buttonexplore">
              <button type="button" class="btn btn-transparent fw-bold" style="border-radius: 2px;width: 130px;
              margin-bottom: 2%; background-color: #e09959;"><a style="color:#fff; text-decoration:none;" href="/wisata">EXPLORE</a></button>
            </div>
          </div>
        <div class="row pb-5">
          <div class="col-sm-12 col-lg-8 isiWisata" style="background-color: #ead5df;border-radius: 15px;background: rgba(256, 256, 256, 0.15);">
              <p style="color: white;padding: 10px; font-size:18px; font-style: italic;">Jawa Tengah adalah salah satu provinsi di Indonesia yang terkenal akan alam dan budayanya.
                Selain itu, di Jawa Tengah juga terkenal akan destinasi wisatanya yang banyak dikunjungi para wisatawan lokal maupun mancanegara. Tempat wisata di Jawa Tengah juga memiliki banyak pilihan, mulai dari pantai, pegunungan, hingga sejarah. Tempat wisata di Jawa Tengah ini pastinya tidak akan mengecewakan hati.</p>
          </div>
        </div>
      </div>
    </section>
  @endsection

