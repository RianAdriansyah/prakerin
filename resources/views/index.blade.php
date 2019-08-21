<!doctype html>
<html lang="en">
  <head>
    <title>Sneakers Room &mdash; Local Pride</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/flaticon/font/flaticon.css') }}">

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
                  <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brand</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    @foreach($kategori as $navcat)
                    <a class="dropdown-item" href="{{ route('category', $navcat->slug) }}">{{ $navcat->nama_kategori }}</a>
                    @endforeach
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news">Berita</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->

      <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">  
                @foreach ($rekomendasi as $item)
              <div class="owl-carousel owl-theme home-slider">
                <div>
                <a href="{{ route('single', $item->artikel->slug) }}" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{ asset('assets/img/rekomendasi/'.$item->foto) }} ">
                    <div class="text half-to-full">
                    <span class="category mb-5">{{ $item->artikel->kategori->nama_kategori }}</span>
                      <div class="post-meta">
                          <span class="mr-2">{{$item->created_at}}</span> &bullet;
                          <span class="mr-2">{{ $item->artikel->kategori->nama_kategori }}</span> &bullet;
                      </div>
                    <h3>{{ $item->artikel->judul }}</h3>
                    <p>{!! $item->artikel->konten !!}</p>
                    </div>
                  </a>
                </div>
                <div>
                    @endforeach
              {{-- <div class="owl-carousel owl-theme home-slider">
                <div>
                  <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{ asset('assets/frontend/images/gmx.jpg') }} ">
                    <div class="text half-to-full">
                      <span class="category mb-5">GMX</span>
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{ asset('assets/frontend/images/person_2.jpg') }}" alt="Colorlib"> Rian Adriansyah</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h3>Geoff Max</h3>
                      <p>This is GEOFF Max. Let us kick the world ass.</p>
                    </div>
                  </a>
                </div>
                <div>
                  <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{ asset('assets/frontend/images/nah.png') }} ">
                    <div class="text half-to-full">
                      <span class="category mb-5">NAH</span>
                      <div class="post-meta">
                        
                        <span class="author mr-2"><img src="{{ asset('assets/frontend/images/person_2.jpg') }}" alt="Colorlib"> Rian Adriansyah</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        
                      </div>
                      <h3>NAH Project</h3>
                      <p>NAH Project adalah pelopor dan masih menjadi satu-satunya Brand Indonesia yang melakukan metode transparency pricing.</p>
                    </div>
                  </a>
                </div>
                <div>
                  <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{ asset('assets/frontend/images/compass.jpg') }} ">
                    <div class="text half-to-full">
                      <span class="category mb-5">Compass</span>
                      <div class="post-meta">
                        
                        <span class="author mr-2"><img src="{{ asset('assets/frontend/images/person_2.jpg') }}" alt="Colorlib"> Rian Adriansyah</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        
                      </div>
                      <h3>Compass ID</h3>
                      <p>Tahun ini, menurut Aji, Compass mengenalkan Compass Bravo yang merupakan kolaborasi dengan Bryant sebagai langkah baru brand.</p>
                    </div>
                  </a>
                </div>
              </div> --}}
              
            </div>
          </div>
          
        </div>


      </section>
      <!-- END section -->

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Latest Posts</h2>
            </div>
          </div>

          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                  @foreach($artikel as $data)
                <div class="col-md-6">
                  <a href="{{ route('single', $data->slug) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="{{ asset('assets/img/artikel/'.$data->foto) }}" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="mr-2">{{$data->created_at}}</span> &bullet;
                        <span class="mr-2">{{ $data->kategori->nama_kategori }}</span> &bullet;
                      </div>
                      <h2>{{ $data->judul }}</h2>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>

            <!-- END main-content -->
@include('layouts.sidebar')
            <!-- END sidebar -->

          </div>
        </div>
      </section>
@include('layouts.footer')