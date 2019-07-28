<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $tag->nama_tag }} | {{ Auth::user()->name }}</title>
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
				<li class="active">Tag</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Tag</h1>
			</div>
		</div><!--/.row-->
		
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11">
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
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('tag.index')}}" role="button">Kembali</a>
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