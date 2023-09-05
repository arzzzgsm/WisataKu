@extends('profil/template/app')

@section('content')
<section class="profilWisata">
  {{-- <img src="front/image/imgProfil2.png" class="img-fluid"  alt="imageIntro4"> --}}
  <div class="container">
    <div class="row justify-content-center" style="margin-top:10px">
      <div class="judulCulture col-12 justify-content-center">
        <h1 class="text-center display-3 mb-4 fw-bold" style="color: white">My Profil</h1>
      </div>
    </div>
    <div class="row justify-content-center pb-5  text-center">
      <div class="col-md-5">
        <div class="col mb-2">
          <img src="front/image/depi.png" alt="" style="width:150px ;height:150px; border-radius:55%">
        </div>
        <div class="col" style="color: white;">
         <p>Nama : Devi Erwita</p>
         <p>NIM    : 3.34.20.3.06</p>
        </div>
      </div>
      <div class="col-md-5">
        <div class="col mb-2">
          <img src="front/image/nurr.png" alt="" style="width:150px ;height:150px; border-radius:55%">
        </div>
        <div class="col" style="color: white;">
         <p>Nama : Dwi Nur Aini</p>
         <p>NIM : 3.34.20.3.08</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center pb-5  text-center">
      <div class="col-md-5">
        <div class="col mb-2">
          <img src="front/image/afi.png" alt="" style="width:150px ;height:150px; border-radius:55%">
        </div>
        <div class="col" style="color: white;">
         <p>Nama : Hamdan Yuwafi</p>
         <p>NIM    : 3.34.20.3.11</p>
        </div>
      </div>
      <div class="col-md-5">
        <div class="col mb-2">
          <img src="front/image/arip.png" alt="" style="width:150px ;height:150px; border-radius:55%">
        </div>
        <div class="col" style="color: white;">
         <p>Nama : Muhammad Arif Prasetyo</p>
         <p>NIM    : 3.34.20.3.15</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center pb-5  text-center">
      <div class="col-md-5">
        <div class="col mb-2">
          <img src="front/image/resaa.png" alt="" style="width:150px ;height:150px; border-radius:55%">
        </div>
        <div class="col" style="color: white;">
         <p>Nama : Reza Amalia Amnesti</p>
         <p>NIM    : 3.34.20.3.19</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
