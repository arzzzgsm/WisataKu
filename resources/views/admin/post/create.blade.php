@extends('sb-admin/app')

@section('title','Sianture-Post')


@section('post','active')

@section('main','show')

@section('main-active','active')



@section('content')
     <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Postingan</h1>

    <!-- Form -->
    <form action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
            @error('judul')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="sampul">Sampul</label>
            <input type="file" class="form-control" id="sampul" name="sampul">
            @error('sampul')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" name="kategori" id="kategori">
                    <option selected disabled>Pilih Kategori</option>
                    @foreach ($kategori as $row)
                        <option value="{{$row->id}}">{{$row->nama}}</option>
                    @endforeach 
                </select>
                @error('kategori')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
        </div>

        {{-- <div class="form-group">
            <label for="tag">Tag</label>
            <select multiple class="form-control" name="tag" id="tag[]">
                @foreach ($tag as $row)
                    <option value="{{$row->id}}">{{$row->nama}}</option>
                @endforeach 
            </select>
            @error('tag')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div> --}}

        <div class="form-group">
            <label for="editor">Konten</label>
            <textarea class="form-control" id="editor" rows="10" name="konten" value="{{old('judul')}}"></textarea>
            @error('konten')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/post" class="btn btn-secondary btn-sm">Kembali</a>
    </form>


@endsection 

@section('ck-editor')
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
@endsection