<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/wisata/template/head')

  <body background="front/image/bg1.jpg">

    {{-- Navbar --}}
    @include('/wisata/template/navbar')

    @yield('content')

    {{-- Footer --}}
    {{-- @include('/wisata/template/footer') --}}

    {{-- Javascript --}}
    @include('/wisata/template/javascript')
  </body>
  </html>
