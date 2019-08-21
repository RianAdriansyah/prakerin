<!doctype html>
<html lang="en">
  <head>
    <title>{{ $tag->nama_tag }} &mdash; Sneakers Room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
  </head>
  <body>
    

    <div class="wrap">

      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
              <a href="https://twitter.com/RianAd01"><span class="fa fa-twitter"></span></a>
                <a href="https://web.facebook.com/rian.adriansyah.98434"><span class="fa fa-facebook"></span></a>
                <a href="https://www.instagram.com/rian_ad01/"><span class="fa fa-instagram"></span></a>
                <a href="https://www.youtube.com/channel/UCo9Uy0N2dhhXHTeI8y7ywzw?view_as=subscriber"><span class="fa fa-youtube-play"></span></a>
              </div>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <form action="{{ route('news') }}" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="text" name="cari" placeholder="Type keyword to search...">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="/">Sneakers Room</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brand</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    @foreach($kategori as $catt)
                    <a class="dropdown-item" href="{{ route('category', $catt->slug) }}">{{ $catt->nama_kategori }}</a>
                    @endforeach
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../about/">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../news/">Berita</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->


    <section class="site-section pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h2 class="mb-4">Tag : {{ $tag->nama_tag }}</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">
                @foreach($tag->artikel as $taglist)
                <div class="post-entry-horzontal">
                  <a href="{{ route('single', $taglist->slug) }}">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{ asset('assets/img/artikel/'.$taglist->foto) }} )"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{ asset('assets/frontend/images/person_2.jpg') }}" alt="Colorlib"> {{ $taglist->user->name }}</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="mr-2">Sneaker</span>
                      </div>
                      <h2>{{ $taglist->judul }}</h2>
                    </span>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <div class="bio text-center">
                  <img src="{{ asset('assets/frontend/images/person_2.jpg') }}" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <h2>Rian Adriansyah</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                    <p><a href="../about/" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                    <p class="social">
                      <a href="https://web.facebook.com/rian.adriansyah.98434" class="p-2"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/RianAd01" class="p-2"><span class="fa fa-twitter"></span></a>
                      <a href="https://www.instagram.com/rian_ad01/" class="p-2"><span class="fa fa-instagram"></span></a>
                      <a href="https://www.youtube.com/channel/UCo9Uy0N2dhhXHTeI8y7ywzw?view_as=subscriber" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- END sidebar-box -->  
             
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Brand</h3>
                <ul class="categories">
                    @foreach($kategori as $data)
                  <li><a href="{{ route('category', $data->slug) }}">{{ $data->nama_kategori }}</a></li>
                  @endforeach
                </ul>
              </div>
              <!-- END sidebar-box -->
            </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p class="mb-4">
                <img src="{{ asset('assets/frontend/images/img_1.jpg') }}" alt="Image placeholder" class="img-fluid">
              </p>
              <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                      <li><a href="../">Home</a></li>
                      <li><a href="{{ route('news') }}">Berita</a></li>
                    </ul>
                  </div>
                  
                  <div class="mb-5">
                    <h3>Social</h3>
                    <ul class="list-unstyled footer-social">
                      <li><a href="https://twitter.com/RianAd01"><span class="fa fa-twitter"></span> Twitter</a></li>
                      <li><a href="https://web.facebook.com/rian.adriansyah.98434"><span class="fa fa-facebook"></span> Facebook</a></li>
                      <li><a href="https://www.instagram.com/rian_ad01/"><span class="fa fa-instagram"></span> Instagram</a></li>
                      <li><a href="https://www.youtube.com/channel/UCo9Uy0N2dhhXHTeI8y7ywzw?view_as=subscriber"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{ asset('assets/frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.stellar.min.js') }}"></script>

    
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
  </body>
</html>