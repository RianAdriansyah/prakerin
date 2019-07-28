<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Artikel | {{ Auth::user()->name }}</title>
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
        <h1 class="page-header">Tambah Artikel</h1>
			</div>
		</div><!--/.row-->
		
		<div class="container">
      <div class="row">
        <div class="col col-lg-11">
            <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Judul Artikel</label>
              <input type="text" name="judul" id="" class="form-control" aria-describedby="helpId" required>
            </div>
                  <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="konten" id="texteditor" cols="30" rows="5" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Nama kategori</label>
                    <select name="kategori_id" class="form-control" required>
                        @foreach($cat as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Tag</label>
                      <select name="tag[]" class="form-control multiple" multiple required>
                        @foreach($tag as $data)
                        <option value="{{ $data->id }}">
                          {{ $data->nama_tag }}</option>
                          @endforeach
                      </select>
                    </div>
                    <button type="submit" name="Simpan"class="btn btn-md btn-info">Simpan</button>
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