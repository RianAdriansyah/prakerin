<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Rian</span>Adriansyah</a>
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
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>On Air</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="#"><em class="fa fa-dashboard">&nbsp;</em> Artikel</a></li>
			<li><a href="{{ route('kategori.index') }}"><em class="fa fa-calendar">&nbsp;</em> Kategori</a></li>
			<li><a href="{{ route('tag.index') }}"><em class="fa fa-bar-chart">&nbsp;</em> Tag</a></li>
			<li><a href="{{ route('rekomendasi.index') }}"><em class="fa fa-toggle-off">&nbsp;</em> Rekomendasi</a></li>
			<li><a href="{{ route('logout') }}" 
				onclick="event.preventDefault();
                	document.getElementById('logout-form').submit();">
				<form id="logout-form" action="{{ route('logout') }}"
				 	method="POST" style="display: none;">
                @csrf
				</form><em class="fa fa-power-off">&nbsp;</em> Logout</a>
			</li>
		</ul>
	</div><!--/.sidebar-->
		