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
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-youtube-play"></span></a>
              </div>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="#" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="text" id="s" placeholder="Type keyword to search...">
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

              <div class="owl-carousel owl-theme home-slider">
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
              </div>
              
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
                        <span class="author mr-2"><img src="{{ asset('assets/frontend/images/person_2.jpg') }}" alt="Colorlib"> Rian Adriansyah</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>{{ $data->judul }}</h2>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>

              <div class="row mt-5">
                <div class="col-md-12 text-center">
                  <nav aria-label="Page navigation" class="text-center">
                    <ul class="pagination">
                      <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <div class="bio text-center">
                  <img src="{{ asset('assets/frontend/images/person_2.jpg') }}" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <h2>Rian Adriansyah</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                    <p><a href="about" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                    <p class="social">
                      <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- END sidebar-box -->  
              <div class="sidebar-box">
                <h3 class="heading">Popular Posts</h3>
                <div class="post-entry-sidebar">
                  @foreach($artikel as $data)
                  <ul>
                    <li>
                      <a href="{{ route('single', $data->slug) }}">
                        <img src="{{ asset('assets/img/artikel/'.$data->foto)}}" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>{{ $data->judul }}</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span>
                          </div>
                        </div>
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Brand</h3>
                <ul class="categories">
                    @foreach($kategori as $data)
                  <li><a href="{{ route('category', $data->slug) }}">{{ $data->nama_kategori }}<span>(12)</span></a></li>
                  @endforeach
                </ul>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
                    @foreach($tag as $navtag)
                    <li><a href="#">{{ $navtag->nama_tag }}</a></li>
                    @endforeach
                </ul>
              </div>
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
                <div class="col-md-7">
                  <h3>Latest Post</h3>
                  <div class="post-entry-sidebar">
                    @foreach($artikel as $data)
                    <ul>
                      <li>
                        <a href="{{ route('single', $data->slug) }}">
                          <img src="{{ asset('assets/img/artikel/'.$data->foto)}}" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>{{ $data->judul }}</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Brand</h3>
                    <ul class="list-unstyled">
                        @foreach($kategori as $footcat)
                      <li><a href="#">{{ $footcat->nama_kategori }}</a></li>
                      @endforeach
                    </ul>
                  </div>
                  
                  <div class="mb-5">
                    <h3>Social</h3>
                    <ul class="list-unstyled footer-social">
                      <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                      <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                      <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                      <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                      <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
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