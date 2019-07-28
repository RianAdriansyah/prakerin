<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Tag | {{ Auth::user()->name }}</title>
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
            <div class="card border-dark">
                    <div class="card-body">
                        <center>
                            <a href="{{ route('tag.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Tag</th>
                                        <th scope="col">Slug</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($tag as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_tag }}</td>
                                        <td>{{ $data->slug }}</td>
                                        
                                        <td>
                                            <a href="{{ route('tag.edit',$data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
										</td>
										<td>
                                            <a href="{{ route('tag.show',$data->id) }}" 
                                            class="btn btn-sm btn-primary">Show Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('tag.destroy',$data->id) }}" method="post">
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