<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/contact/template/head')

  <body background="front/image/bg3.jpg">

    {{-- Navbar --}}
    @include('/contact/template/navbar')

    @yield('content')

    {{-- Footer --}}
    {{-- @include('/contact/template/footer') --}}

    {{-- Javascript --}}
    @include('/contact/template/javascript')
  </body>
  </html>
