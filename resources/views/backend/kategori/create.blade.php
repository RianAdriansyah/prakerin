@extends('layouts.app')

@section('content')
<title>Create Kategori</title>
    <div class="container">
        <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Nama Kategori</label>
              <input type="text" name="nama" id="" class="form-control" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('artikel.index')}}" role="button">Kembali</a>

            
        </form>
    </div>
@endsection
