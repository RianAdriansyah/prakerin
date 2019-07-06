<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Tech Mag template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset('assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/contact_responsive.css') }}">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Header bar -->
		<div class="header_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="sub_button text-center"><a href="#">subscribe</a><div class="d-flex flex-row align-items-start justify-content-start"><div></div><div></div><div></div></div></div>
							<div class="header_social ml-auto">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justfy-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo"><span>Tech</span>mag</div>
									<div class="logo_sub">Innovation & Technology Magazine</div>
								</a>
							</div>
							<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">
								<a href="#">
									<div class="background_image" style="background-image:url({{ asset('assets/frontend/images/extra.jpg') }})"></div>
									<div class="header_extra_content">
										<div class="header_extra_title">save 50%</div>
										<div class="header_extra_subtitle">Buy now in stores</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Navigation & Search -->
		<div class="header_nav_container" id="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
							
							<!-- Logo -->
							<div class="logo_container">
								<a href="#">
									<div class="logo"><span>Tech</span>mag</div>
									<div class="logo_sub">Innovation & Technology Magazine</div>
								</a>
							</div>

							<!-- Navigation -->
							<nav class="main_nav">
								<ul class="main_nav_list d-flex flex-row align-items-center justify-content-start">
								<li><a href="/">home</a></li>
									<li><a href="about">about</a></li>
									<li><a href="contact">contact</a></li>
									<li><a href="category">category</a></li>
								</ul>
							</nav>

							<!-- Search -->
							<div class="header_search_container ml-auto">
								<div class="header_search">
									<form action="#" id="header_search_form" class="header_search_form d-flex flex-row align-items-center justfy-content-start">
										<div><div class="header_search_activation"><i class="fa fa-search" aria-hidden="true"></i></div></div>
										<input type="text" class="header_search_input" placeholder="Search" required="required">
									</form>
								</div>
							</div>

							<!-- Hamburger -->
							<div class="hamburger ml-auto menu_mm"><i class="fa fa-bars  trans_200 menu_mm" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="/">Home</a></li>
				<li class="menu_mm"><a href="#">Tech</a></li>
				<li class="menu_mm"><a href="#">Innovation</a></li>
				<li class="menu_mm"><a href="#">Videos</a></li>
				<li class="menu_mm"><a href="about">About</a></li>
				<li class="menu_mm"><a href="contact">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_subscribe"><a href="#">Subscribe</a></div>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/frontend/images/about.jpg') }}" data-speed="0.8"></div>
		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="/">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-lg-4 contact_col">
					<div class="contact_content">
						<div class="contact_title">Get in Touch</div>
						<div class="contact_text">
							<p> Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.Lorem ipsum dolor sit amet, consectetur adipiscin.</p>
						</div>
						<div class="contact_social">
							<ul class="contact_social_list d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="contact_info">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
										<div class="contact_info_icon"><img src="{{ asset('assets/frontend/images/icon_9.svg') }}" alt=""></div>
									</div>
									<div class="contact_info_content">1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
										<div class="contact_info_icon"><img src="{{ asset('assets/frontend/images/icon_10.svg') }}" alt=""></div>
									</div>
									<div class="contact_info_content">+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
										<div class="contact_info_icon"><img src="{{ asset('assets/frontend/images/icon_11.svg') }}" alt=""></div>
									</div>
									<div class="contact_info_content">yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_form_container">
						<div class="contact_title">Send us a message</div>
						<form action="#" id="contact_form" class="contact_form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="contact_input" placeholder="Name" required="required">
								</div>
								<div class="col-md-6">
									<input type="email" class="contact_input" placeholder="E-mail" required="required">
								</div>
							</div>
							<input type="email" class="contact_input" placeholder="E-mail" required="required">
							<textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
							<button class="contact_button trans_200">submit</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Google Map -->
	
	<div class="google_map_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_map">
						<!-- Google Map -->
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_social">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<ul class="footer_social_list d-flex flex-row align-items-center justify-content-center">
							<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_content">
			<!-- Image credit: https://unsplash.com/@badashphotos -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/frontend/images/footer.jpg') }}" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="logo_container">
							<a href="#">
								<div class="logo"><span>Tech</span>mag</div>
								<div class="logo_sub">Innovation & Technology Magazine</div>
							</a>
						</div>
						<div class="footer_nav_container text-center">
							<nav class="footer_nav">
								<ul class="footer_nav_list d-flex flex-md-row flex-column align-items-center justify-content-start">
								<li><a href="/">home</a></li>
									<li><a href="about">about</a></li>
									<li><a href="contact">contact</a></li>
									<li><a href="category">category</a></li>
								</ul>
							</nav>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="{{ asset('assets/frontend/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/frontend/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset('assets/frontend/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{ asset('assets/frontend/js/contact.js') }}"></script>
</body>
</html>