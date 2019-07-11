@extends('layouts.app')

@section('content')
<title>Show Tag</title>
    <div class="container">
        <form action="{{ route('tag.show', $tag->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
            @csrf
            <div class="form-group">
              <label for="">Nama Tag</label>
              <input type="text" name="nama_tag" id="" class="form-control" value="{{ $tag->nama_tag }}" disabled>
            </div>
            <div class="form-group">
              <label for="">Slug</label>
              <input type="text" name="slug" id="" class="form-control" value="{{ $tag->slug }}" disabled>
            </div>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('tag.index')}}" role="button">Kembali</a>
        </form>
    </div>
@endsection
