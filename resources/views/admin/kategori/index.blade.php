@extends('sb-admin/app')

@section('title','Sianture-Kategori')

@section('kategori','active')

@section('main','show')

@section('main-active','active')

@section('content')
    <!-- flashdata -->
    {!! session('sukses') !!}

     <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

    <a href="/kategori/create" class="btn btn-success btn-sm "><i class="fas fa-plus mx-1"></i>Tambah Kategori</a>

    <!-- Table -->
    <table class="table table-hover mt-4 table-bordered">
        <thead>
            <tr class="table-success">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Slug</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $row)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$row->nama}}</td>
                <td>{{$row->slug}}</td>
                <td align="center" width="20%">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/kategori/{{$row->id}}/edit" class="btn btn-success btn-sm mr-1"><i class="fas fa-edit mx-1"></i>Update</a>
                        <a href="/kategori/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash mx-1"></i>Delete</a>
                        {{-- <form action="/kategori/{{$row->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash mx-1"></i>Delete</button>
                        </form> --}}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



    {{$kategori -> links()}}
@endsection