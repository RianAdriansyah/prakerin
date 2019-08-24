<!doctype html>
<html lang="en">
  <head>
    <title>{{ $cat->nama_kategori }} &mdash; Sneakers Room</title>
    @include('layouts.header')
      <!-- END header -->


    <section class="site-section pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h2 class="mb-4">Brand : {{ $cat->nama_kategori }}</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">
                @foreach($cat->artikel as $listcat)
                <div class="post-entry-horzontal">
                  <a href="{{ route('single', $listcat->slug) }}">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{ asset('assets/img/artikel/'.$listcat->foto) }} )"></div>
                    <span class="text">
                      <div class="post-meta">
                      <span class="mr-2">{{ $listcat->created_at->diffForHumans() }}</span> &bullet;
                      <span class="mr-2">{{ $listcat->kategori->nama_kategori }}</span>
                      </div>
                      <h2>{{ $listcat->judul }}</h2>
                    </span>
                  </a>
                </div>
                @endforeach
                <!-- END post -->
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