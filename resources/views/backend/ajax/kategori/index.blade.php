<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Kategori</title>
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
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Rian</span>Adriansyah</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Ajax</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="{{ route('artikel.index') }}"><em class="fa fa-dashboard">&nbsp;</em> Artikel</a></li>
			<li><a href="#"><em class="fa fa-calendar">&nbsp;</em> Kategori</a></li>
			<li><a href="{{ route('tag.index') }}"><em class="fa fa-bar-chart">&nbsp;</em> Tag</a></li>
			<!-- <li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="#"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li> -->
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Ajax</li>
				<li class="active">Kategori</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Kategori</h1>
			</div>
		</div><!--/.row-->

		<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    {{-- <form action="">
                    </form> --}}
                    <div class="form-group">
                            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="float-right btn btn-primary btn-rounded btn-outline">Tambah Data</button>
                            <div id="id01" class="modal">
                            <form class="modal-content animate" action="/action_page.php">
                                <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <h2>Tambah Data</h2>
                                </div>
                                <div class="container">
                                    <label>Nama Kategori : </label>
                                    <input type="text" name="nama_kategori" class="form-control" required>
                                    </div
                                <div class="container" style="background-color:#f1f1f1">
                                    <button class="float-right btn btn-info btn-rounded btn-outline tombol-simpan">Simpan</button>
                                </div>
                            </form>
                            </div>
                    </div>
                    <div class="card-body">
                        <table id="bs4-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="data-kategori">
                                {{-- berisi kategori.js --}}
                            </tbody>
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
	
	<script src="{{ asset('assets/backend/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/kategori.js')}}"></script>
	<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/backend/js/chart.min.js') }}"></script>
	<script src="{{ asset('assets/backend/js/chart-data.js') }}"></script>
	<script src="{{ asset('assets/backend/js/easypiechart.js') }}"></script>
	<script src="{{ asset('assets/backend/js/easypiechart-data.js') }}"></script>
	<script src="{{ asset('assets/backend/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('assets/backend/js/custom.js') }}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>