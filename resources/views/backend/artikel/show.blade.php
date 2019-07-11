@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('artikel.show', $artikel->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">

            @csrf
            <div class="form-group">
              <label for="">Judul Artikel</label>
              <input type="text" name="judul" id="" class="form-control" aria-describedby="helpId" value="{{$artikel->judul}}" disabled>
            </div>
            <div class="form-group">
              <label for="">Konten</label>
              <input type="text" name="konten" class="form-control" value="{!! $artikel->konten !!}" disabled></input>
            </div>
            <div class="form-group">
              <label for="">Foto</label>
              <td><img src="{{ asset('assets/img/artikel/'.$artikel->foto)}}" width="50%"></td>
            </div>
            <div class="form-group">
                <label for="kategori"></label>
                <input type="text" name="kategori_id" class="form-control" value="{{ $artikel->kategori->nama_kategori }}" disabled>
                <div class="form-group">
                            <label for="">Tag</label>
                            <select name="tag[]" class="form-control multiple" multiple disabled>
                                @foreach($tag as $data)
                                    <option value="{{ $data->id }}"
                                        {{ (in_array($data->id, $selected)) ?
                                        'selected="selected"' : '' }}>
                                        {{ $data->nama_tag }}</option>
                                @endforeach
                            </select>

            <a name="" id="" class="btn btn-outline-secondary" href="{{route('artikel.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection
