<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/home/template/head')

  <body background="front/image/bg1.jpg">

    {{-- Navbar --}}
    @include('/home/template/navbar')

    {{-- Content --}}

    @yield('content')


    {{-- Javascript --}}
    @include('/home/template/javascript')
  </body>
</html>
