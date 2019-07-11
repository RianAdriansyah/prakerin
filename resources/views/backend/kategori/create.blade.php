@extends('layouts.app')

@section('content')
<title>Create Kategori</title>
    <div class="container">
        <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Nama Kategori</label>
              <input type="text" name="nama_kategori" id="" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('kategori.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection
