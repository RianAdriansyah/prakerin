<!DOCTYPE html>
<html lang="en">
<head>
<title>Category</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Tech Mag template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset('assets/frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/category.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/styles/category_responsive.css') }}">
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
				<li class="menu_mm"><a href="about">about</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('assets/frontend/images/footer.jpg') }}" data-speed="0.8"></div>
		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Technology</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="/">Home</a></li>
									<li>Technology</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Container -->

	<div class="content_container">
		
		<!-- Featured Posts -->
		<div class="featured_title">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="section_title">Featured Posts</div>
								<div class="section_subtitle">Handpicked articles</div>
							</div>
							<div class="section_bar"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="featured_posts">

							<!-- Post -->
							<div class="featured_post post_h_large">
								<div class="row">
									<div class="col-lg-6">
										<div class="featured_post_image"><img src="{{ asset('assets/frontend/images/featured_1.jpg') }}" alt=""></div>
									</div>
									<div class="col-lg-6">
										<div class="post_content">
											<div class="post_category cat_technology"><a href="category">technology</a></div>
											<div class="post_title"><a href="single">The new Apple release ceremony</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="{{ asset('assets/frontend/images/author_1.jpg') }}" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
												<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
											</div>
											<div class="post_text">
												<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
											</div>
											<div class="post_button trans_200"><a href="single">read more</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">

						<div class="posts">
								
							<!-- Post -->
							<div class="post_item post_h_large">
								<div class="row">
									<div class="col-lg-5">
										<div class="post_image"><img src="{{ asset('assets/frontend/images/post_h_1.jpg') }}" alt="https://unsplash.com/@jmckinven"></div>
									</div>
									<div class="col-lg-7">
										<div class="post_content">
											<div class="post_category cat_technology"><a href="category">technology</a></div>
											<div class="post_title"><a href="single">The new Apple release ceremony</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="{{ asset('assets/frontend/images/author_1.jpg') }}" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
												<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
											</div>
											<div class="post_text">
												<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
											</div>
										</div>
									</div>
								</div>	
							</div>

							<!-- Post -->
							<div class="post_item post_h_large">
								<div class="row">
									<div class="col-lg-5">
										<div class="post_image"><img src="{{ asset('assets/frontend/images/post_h_2.jpg') }}" alt="https://unsplash.com/@neonbrand"></div>
									</div>
									<div class="col-lg-7">
										<div class="post_content">
											<div class="post_category cat_world"><a href="category">world</a></div>
											<div class="post_title"><a href="single">The new Apple release ceremony</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="{{ asset('assets/frontend/images/author_1.jpg') }}" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
												<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
											</div>
											<div class="post_text">
												<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
											</div>
										</div>
									</div>
								</div>	
							</div>

							<!-- Post -->
							<div class="post_item post_h_large">
								<div class="row">
									<div class="col-lg-5">
										<div class="post_image"><img src="{{ asset('assets/frontend/images/post_h_3.jpg') }}" alt="https://unsplash.com/@cdr6934"></div>
									</div>
									<div class="col-lg-7">
										<div class="post_content">
											<div class="post_category cat_world"><a href="category">world</a></div>
											<div class="post_title"><a href="single">New HTML5 Codes - Freebies</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="{{ asset('assets/frontend/images/author_1.jpg') }}" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
												<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
											</div>
											<div class="post_text">
												<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
											</div>
										</div>
									</div>
								</div>	
							</div>

							<!-- Post -->
							<div class="post_item post_h_large">
								<div class="row">
									<div class="col-lg-5">
										<div class="post_image"><img src="{{ asset('assets/frontend/images/post_h_4.jpg') }}" alt="https://unsplash.com/@nordwood"></div>
									</div>
									<div class="col-lg-7">
										<div class="post_content">
											<div class="post_category cat_technology"><a href="category">technology</a></div>
											<div class="post_title"><a href="single"Fast tutorial for noobies</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="{{ asset('assets/frontend/images/author_1.jpg') }}" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
												<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
											</div>
											<div class="post_text">
												<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
											</div>
										</div>
									</div>
								</div>	
							</div>

							<!-- Post -->
							<div class="post_item post_h_large">
								<div class="row">
									<div class="col-lg-5">
										<div class="post_image"><img src="{{ asset('assets/frontend/images/post_h_5.jpg') }}" alt="https://unsplash.com/@frostroomhead"></div>
									</div>
									<div class="col-lg-7">
										<div class="post_content">
											<div class="post_category cat_world"><a href="category">world</a></div>
											<div class="post_title"><a href="single">3 Easy steps to decode a phone</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="{{ asset('assets/frontend/images/author_1.jpg') }}" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
												<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
											</div>
											<div class="post_text">
												<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
											</div>
										</div>
									</div>
								</div>	
							</div>

							<!-- Post -->
							<div class="post_item post_h_large">
								<div class="row">
									<div class="col-lg-5">
										<div class="post_image"><img src="{{ asset('assets/frontend/images/post_h_6.jpg') }}" alt="https://unsplash.com/@lloydaleveque"></div>
									</div>
									<div class="col-lg-7">
										<div class="post_content">
											<div class="post_category cat_world"><a href="category">world</a></div>
											<div class="post_title"><a href="single">New HTML5 Codes - Freebies</a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
													<div><div class="post_author_image"><img src="{{ asset('assets/frontend/images/author_1.jpg') }}" alt=""></div></div>
													<div class="post_author_name"><a href="#">Michael Smith</a></div>
												</div>
												<div class="post_date"><a href="#">29 April 2018</a></div>
												<div class="post_comments ml-auto"><a href="#">3 comments</a></div>
											</div>
											<div class="post_text">
												<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
											</div>
										</div>
									</div>
								</div>	
							</div>

						</div>

						<!-- Load more button -->
						<div class="load_more">
							<div class="load_more_button"><a href="#">load more</a></div>
						</div>
					</div>

					<!-- Sidebar -->

					<div class="col-lg-3">
						<div class="sidebar">

							<!-- Latest Posts -->
							<div class="sidebar_latest">
								<div class="sidebar_title">Latest Posts</div>
								<div class="latest_posts">
									
									<!-- Latest Post -->
									<div class="latest_post d-flex flex-row align-items-start justify-content-start">
										<div><div class="latest_post_image"><img src="{{ asset('assets/frontend/images/latest_1.jpg') }}" alt="https://unsplash.com/@anniespratt"></div></div>
										<div class="latest_post_content">
											<div class="post_category_small cat_video"><a href="category">video</a></div>
											<div class="latest_post_title"><a href="single">New tech development</a></div>
											<div class="latest_post_date">March 12, 2018</div>
										</div>
									</div>

									<!-- Latest Post -->
									<div class="latest_post d-flex flex-row align-items-start justify-content-start">
										<div><div class="latest_post_image"><img src="{{ asset('assets/frontend/images/latest_2.jpg') }}" alt="https://unsplash.com/@agkdesign"></div></div>
										<div class="latest_post_content">
											<div class="post_category_small cat_world"><a href="category">world</a></div>
											<div class="latest_post_title"><a href="single">New tech development</a></div>
											<div class="latest_post_date">March 12, 2018</div>
										</div>
									</div>

									<!-- Latest Post -->
									<div class="latest_post d-flex flex-row align-items-start justify-content-start">
										<div><div class="latest_post_image"><img src="{{ asset('assets/frontend/images/latest_3.jpg') }}" alt="https://unsplash.com/@mfgonz"></div></div>
										<div class="latest_post_content">
											<div class="post_category_small cat_technology"><a href="category">tech</a></div>
											<div class="latest_post_title"><a href="single">New tech development</a></div>
											<div class="latest_post_date">March 12, 2018</div>
										</div>
									</div>

									<!-- Latest Post -->
									<div class="latest_post d-flex flex-row align-items-start justify-content-start">
										<div><div class="latest_post_image"><img src="{{ asset('assets/frontend/images/latest_4.jpg') }}" alt="https://unsplash.com/@juja_han"></div></div>
										<div class="latest_post_content">
											<div class="post_category_small cat_technology"><a href="category">tech</a></div>
											<div class="latest_post_title"><a href="single">New tech development</a></div>
											<div class="latest_post_date">March 12, 2018</div>
										</div>
									</div>

								</div>
							</div>

							<!-- Most Viewed -->

							<div class="most_viewed">
								<div class="sidebar_title">Most Viewed</div>
								<div class="most_viewed_items">
									
									<!-- Most Viewed Item -->
									<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">
										<div><div class="most_viewed_num">01.</div></div>
										<div class="most_viewed_content">
											<div class="post_category_small cat_video"><a href="category">video</a></div>
											<div class="most_viewed_title"><a href="single">New tech development</a></div>
											<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>
										</div>
									</div>

									<!-- Most Viewed Item -->
									<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">
										<div><div class="most_viewed_num">02.</div></div>
										<div class="most_viewed_content">
											<div class="post_category_small cat_world"><a href="category">world</a></div>
											<div class="most_viewed_title"><a href="single">Robots are taking over</a></div>
											<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>
										</div>
									</div>

									<!-- Most Viewed Item -->
									<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">
										<div><div class="most_viewed_num">03.</div></div>
										<div class="most_viewed_content">
											<div class="post_category_small cat_technology"><a href="category">tech</a></div>
											<div class="most_viewed_title"><a href="single">10 tips to tech world</a></div>
											<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>
										</div>
									</div>

								</div>
							</div>

							<!-- Extra -->
							<div class="sidebar_extra">
								<a href="#">
									<div class="sidebar_title">Advertisement</div>
									<div class="sidebar_extra_container">
										<div class="background_image" style="background-image:url({{ asset('assets/frontend/images/extra_2.jpg') }})"></div>
										<div class="sidebar_extra_content">
											<div class="sidebar_extra_title">30%</div>
											<div class="sidebar_extra_title">off</div>
											<div class="sidebar_extra_subtitle">Buy online now</div>
										</div>
									</div>
								</a>
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
<script src="{{ asset('assets/frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/category.js') }}"></script>
</body>
</html>