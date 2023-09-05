@extends('sb-admin/app')

@section('title','Sianture-Post')

@section('post','active')

@section('main','show')

@section('main-active','active')

@section('content')
    <!-- flashdata -->
    {!! session('sukses') !!}

     <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Postingan</h1>

    <a href="/post/create" class="btn btn-success btn-sm "><i class="fas fa-plus mx-1"></i>Tambah Postingan</a>

    @if ($post[0])
        <!-- Table -->
        <table class="table table-hover mt-4 table-bordered">
            <thead>
                <tr class="table-success">
                    <th scope="col">No</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    {{-- <th scope="col">Tag</th> --}}
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($post as $row)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="/upload/post/{{$row->sampul}}" alt="" width="80px" height="80px"></td>
                    <td>{{$row->judul}}</td>
                    <td>{{$row->kategori->nama}}</td>
                    {{-- <td>
                        @foreach ($row->tag as $tag)
                            <span class="badge bg-dark">{{$tag->nama}}</span>
                        @endforeach 
                    </td> --}}
                    <td align="center" width="30%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/post/{{$row->id}}" class="btn btn-dark btn-sm mr-1"><i class="fas fa-eye mx-1"></i>Detail</a>
                            <a href="/post/{{$row->id}}/edit" class="btn btn-success btn-sm mr-1"><i class="fas fa-edit mx-1"></i>Edit</a>
                            <a href="/post/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash mx-1"></i>Delete</a>
                            {{-- <form action="/post/{{$row->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Menghapus Data ?')"><i class="fas fa-trash mx-1"></i>Delete</button>
                            </form> --}}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{$post -> links()}}

    @else

        <div class="alert alert-info mt-3" role="alert">
            Anda Belum mempunyai Data
        </div>

    @endif
@endsection