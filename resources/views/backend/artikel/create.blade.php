@extends('layouts.app')

@section('content')
<title>Create Artikel</title>
    <div class="container">
        <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Judul Artikel</label>
              <input type="text" name="nama" id="" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Konten</label>
              <textarea name="konten" id="konten" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="">Foto</label>
              <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div class="form-group">
                <label for="kategori"></label>
                <select name="kategori" class="form-control">
                <option value="">-- Pilih --</option>
                <option value="SMK">SMK</option>
                <option value="SMA">SMA</option>
                </select>
            </div>
            <button type="submit" name="Simpan"class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('artikel.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection
