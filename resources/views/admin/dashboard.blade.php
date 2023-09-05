@extends('sb-admin/app')

@section('title','WisataKu-Dashboard')

@section('dashboard','active')

@section('content')
     <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>


    <!-- Post Dan Kategori-->
    <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                               Jumlah Post
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_post}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Kategori
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_kategori}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tag fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Post  Hari Ini --}}

    <div class="card">
        <div class="card shadow ">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-success">Postingan Hari Ini</h6>
            </div>
            <div class="card-body">
                @if ($post->count() >= 1)
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="table-success">
                                <th scope="col">No</th>
                                <th scope="col">Sampul</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($post as $row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td><img src="/upload/post/{{$row->sampul}}" alt="" width="80px" height="80px"></td>
                                    <td>{{$row->judul}}</td>
                                    <td>{{$row->kategori->nama}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info mt-4" role="alert">
                        Anda Tidak memiliki Postingan Terbaru Hari Ini
                    </div>
                @endif
            </div>
         </div>
    </div>

    {{-- Kategori Hari Ini --}}

    <div class="card mt-3">
        <div class="card shadow ">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-success">Kategori Hari Ini</h6>
            </div>
            <div class="card-body">
                @if ($kategori->count() >= 1)
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr class="table-success">
                                <th scope="col">No</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Slug</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->slug}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info mt-4" role="alert">
                        Anda Tidak memiliki Postingan Terbaru Hari Ini
                    </div>
                @endif
            </div>
         </div>
    </div>
@endsection
