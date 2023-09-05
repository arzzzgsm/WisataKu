<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('wisata/wisata_list/wisata_detail/template/head')

  <body background="../../../front/image/bg10.jpg">

    {{-- Navbar --}}
    @include('wisata/wisata_list/wisata_detail/template/navbar')

    @yield('content')

    {{-- Footer --}}
    @include('wisata/wisata_list/wisata_detail/template/footer')

    {{-- Javascript --}}
    @include('wisata/wisata_list/wisata_detail/template/javascript')
  </body>
  </html>
