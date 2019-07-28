<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Artikel | {{ Auth::user()->name }}</title>
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
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card border-dark">
                    <div class="card-body">
                        <center>
                            <a href="{{ route('artikel.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                            <div class="table-responsive">
                                <table class="table table-striped text-center">
                                <thead class="thead-dark">
                                    <tr>
										<th scope="col">No</th>
										<th scope="col">Penulis</th>
                                        <th scope="col">Judul Artikel</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Kategori</th>
										<th scope="col">Slug</th>
										<th scope="col">Tag</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($artikel as $data)
                                    <tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->user->name }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td><img src="{{ asset('assets/img/artikel/'.$data->foto)}}" width="100"></td>
                                        <td>{{ $data->kategori->nama_kategori}}</td>
										<td>{{ $data->slug }}</td>
										<td>
                                            <ol>
                                                @foreach($data->tag as $isi)
                                                    <li>{{ $isi->nama_tag }}</li>
                                                @endforeach
                                            </ol>
                                        </td>
                                        <td>
                                            <a href="{{ route('artikel.edit',$data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
										</td>
										<td>
                                            <a href="{{ route('artikel.show',$data->id) }}" 
                                            class="btn btn-sm btn-primary">Show Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('artikel.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                        </div>
                    </div>
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