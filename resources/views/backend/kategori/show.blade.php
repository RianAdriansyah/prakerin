@extends('layouts.app')

@section('content')
<title>Show Kategori</title>
    <div class="container">
        <form action="{{ route('kategori.show', $cat->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
            @csrf
            <div class="form-group">
              <label for="">Nama Kategori</label>
              <input type="text" name="nama_kategori" id="" class="form-control" value="{{ $cat->nama_kategori }}" disabled>
            </div>
            <div class="form-group">
              <label for="">Slug</label>
              <input type="text" name="slug" id="" class="form-control" value="{{ $cat->slug }}" disabled>
            </div>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('kategori.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection
