<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('wisata/wisata_list/template/head')

  <body background="../../front/image/bg10.jpg">

    {{-- Navbar --}}
    @include('wisata/wisata_list/template/navbar')

    @yield('content')


    @include('wisata/wisata_list/template/footer')

    {{-- Javascript --}}
    @include('wisata/wisata_list/template/javascript')
  </body>
  </html>
