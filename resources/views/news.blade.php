<!doctype html>
<html lang="en">
  <head>
    <title>Berita &mdash; Sneakers Room</title>
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
              <form action="{{ route('news') }}" class="search-top-form" method="GET">
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
                  <a class="nav-link" href="/">Home</a>
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
                  <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="news">Berita</a>
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
            <h2 class="mb-4">Berita Seputar Sneakers</h2>
          </div>
        </div>
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">
                <!-- END post -->
                @foreach($artikel as $isi)
                <div class="post-entry-horzontal">
                  <a href="{{ route('single', $isi->slug) }}">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{ asset('assets/img/artikel/'.$isi->foto) }})"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="mr-2">{{$isi->created_at}}</span> &bullet;
                        <span class="mr-2">{{ $isi->kategori->nama_kategori }}</span> &bullet;
                      </div>
                      <h2>{{ $isi->judul }}</h2>
                    </span>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          <!-- END main-content -->
@include('layouts.sidebar')
          <!-- END sidebar -->

        </div>
      </div>
    </section>
@include('layouts.footer')