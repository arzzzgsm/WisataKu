@extends('sb-admin/app')

@section('title','Sianture-Tag')

@section('content')
    <!-- flashdata -->
    {!! session('sukses') !!}

     <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tag</h1>

    <a href="/tag/create" class="btn btn-primary btn-sm "><i class="fas fa-plus mx-1"></i>Tambah Tag</a>

    @if ($tag[0])
                <!-- Table -->
        <table class="table table-hover mt-4 table-bordered">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tag as $row)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->slug}}</td>
                    <td align="center" width="20%">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/tag/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit mx-1"></i>Update</a>
                            <form action="/tag/{{$row->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Akan Menghapus Data?')"><i class="fas fa-trash mx-1"></i>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



        {{$tag -> links()}}
    @else
        <div class="alert alert-info mt-3" role="alert">
            Anda Belum Mempunyai Data
        </div>
    @endif
@endsection