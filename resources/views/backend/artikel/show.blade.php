<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $artikel->judul }} | {{ Auth::user()->name }}</title>
	<link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/backend/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/backend/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/backend/css/styles.css') }}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{ asset('assets/backend/js/html5shiv.js') }}"></script>
	<script src="{{ asset('assets/backend/js/respond.min.js') }}"></script>
	<![endif]-->
</head>
<body>
	@include('layouts.backend')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
				</a></li>
				<li class="active">Backend</li>
				<li class="active">Artikel</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Data Artikel</h1>
			</div>
		</div><!--/.row-->
		
		<div class="container">
      <div class="row">
        <div class="col col-lg-11">
        <form action="{{ route('artikel.show', $artikel->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">

            @csrf
            <div class="form-group">
              <label for="">Judul Artikel</label>
              <input type="text" name="judul" id="" class="form-control" aria-describedby="helpId" value="{{$artikel->judul}}" disabled>
            </div>
            <div class="form-group">
			  <label for="">Konten</label>
			  <textarea name="konten" id="ckeditor" cols="30" rows="10" class="form-control" disabled>{{ $artikel->konten }}</textarea>
            </div>
            <div class="form-group">
              <label for="">Foto</label>
              <td><img src="{{ asset('assets/img/artikel/'.$artikel->foto)}}" width="50%"></td>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
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
                    </div>
            <a name="" id="" class="btn btn-md btn-warning" href="{{route('artikel.index')}}" role="button">Kembali</a>
        </form>
            </div>
          </div>
        </div>
      </div><!--/.col-->
    <div class="col-sm-12">
      <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
    </div>
  </div><!--/.row-->
</div>	<!--/.main-->
@include('layouts.res')
		
</body>
</html>