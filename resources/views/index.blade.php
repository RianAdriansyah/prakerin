<!doctype html>
<html lang="en">
  <head>
    <title>Sneakers Room &mdash; Local Pride</title>
    @include('layouts.header')
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
                          <span class="mr-2">{{$item->created_at->diffForHumans()}}</span> &bullet;
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
                        <span class="mr-2">{{$data->created_at->diffForHumans()}}</span> &bullet;
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