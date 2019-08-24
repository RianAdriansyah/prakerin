<!doctype html>
<html lang="en">
  <head>
    <title>About &mdash; Sneakers Room</title>
    @include('layouts.header')
      <!-- END header -->


    <section class="site-section pt-5">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-4">Hi There! I'm Rian Adriansyah</h2>
                <p class="mb-5"><img src="{{ asset('assets/frontend/images/me.jpg') }}" alt="Image placeholder" class="img-fluid"></p>
                <p>My name is Rian Adriansyah, you can call me Rian, yan, RianAd, ian, or anything whatever you want.
                   Welcome to my profile, my simple profile i guess.. I'd love to sharing my experiences too, 
                   I love something that makes sense for me. OK that's just an intermezzo, Let's get started! 
                </p>
                <p>Saya memulai perjalanan saya di SMK Assalaam Bandung dengan mengambil jurusan Informatika.
                  Saya suka dengan teknologi, gadget, ataupun itu. Saya selalu membaca berita seputar teknologi
                  agar saya tidak ketinggalan zaman, karena teknologi berkembang bukan hanya per tahun, per bulan, per minggu,
                  bahkan perkembangan teknologi sekarang bisa sampai per menit.
                </p>
                <p>
                  Oleh sebab itu saya sangat tertarik dengan teknologi yang bisa memudahkan berbagai kegiatan saya sehari hari,
                  tetapi saya tidak lupa dengan kewajiban saya sebagai seorang pelajar untuk mempelajari materi materi sekolah
                  untuk meneruskan pendidikan saya. 
                </p>
                <p>
                  Back to the point. Website Sneakers Room yang saya buat ini menyajikan informasi informasi seputar
                  dunia sneakers di Indonesia, yang dimana saya ingin mengajak masyarakat Indonesia untuk mendukung brand brand lokal
                  Indonesia dan ikut membantu dalam perkembangan brand itu sendiri supaya dapat berkembang dan maju 
                  demi memajukan perekonomian Indonesia.
                </p>
                <p>
                  Saya ingin industri lokal Indonesia dikenal di mancanegara karena kualitasnya bukan gengsinya,
                  dengan demikian, semoga website yang saya rancang ini dapat membantu dan bermanfaat bagi seluruh
                  masyarakat, khususnya masyarakat Indonesia dalam pengembangan budaya sneakers Indonesia.
                </p>
                  <p>
                      <a class="btn btn-primary rounded" data-toggle="collapse" href="#multiCollapseExample1" 
                      role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                      Simple Biodata</a>
                      
                      <button class="btn btn-success rounded" type="button" data-toggle="collapse" 
                      data-target="#multiCollapseExample2" aria-expanded="false" 
                      aria-controls="multiCollapseExample2" data-toggle="tooltip"
                       data-placement="right" title="Rian Adriansyah">ME</button>
                    </p>
                    <div class="row">
                      <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-primary">Rian Adriansyah</li>
                                <li class="list-group-item text-success">SMK Assalaam Bandung</li>
                                <li class="list-group-item text-dark">XII RPL 2</li>
                                <li class="list-group-item text-info">Rekayasa Perangkat Lunak</li>
                                <li class="list-group-item text-warning">Web Developer</li>
                                <li class="list-group-item text-danger">Brand Enthusiast</li>
                              </ul>
                        </div>
                      </div>
                      <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                          <div class="card card-body">
                              <img src="{{ asset('assets/frontend/images/mee.jpg') }}" alt="Image placeholder" 
                              class="img-fluid">
                          </div>
                        </div>
                      </div>
                        <blockquote class="blockquote">
                          <p class="mb-0">Life is the most difficult exam. Many people fail because they try to copy others. 
                            Not realising that everyone has a different question paper.
                          </p>
                          <footer class="blockquote-footer">A Note For <cite title="Myself">Myself</cite></footer>
                        </blockquote>
                    </div>
              </div>
            </div>

            <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-5">
                  <a class="text-primary" data-toggle="collapse" href="#MyLatestPost" 
                   aria-expanded="false" aria-controls="MyLatestPost"
                   data-toggle="tooltip" data-placement="right" title="Klik untuk melihat">
                  <h3><- My Latest Posts -></h3></a>
              </div>
              <div class="col-lg-12">
                  <div class="row">
                      <div class="col">
                          <div class="collapse multi-collapse" id="MyLatestPost">
                                @foreach($artikel as $isi)
                                <div class="post-entry-horzontal">
                                  <a href="{{ route('single', $isi->slug) }}">
                                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{ asset('assets/img/artikel/'.$isi->foto) }})"></div>
                                    <span class="text">
                                      <div class="post-meta">
                                        <span class="mr-2">{{$isi->created_at->diffForHumans()}}</span> &bullet;
                                      <span class="mr-2">{{ $isi->kategori->nama_kategori }}</span> &bullet;
                                      </div>
                                      <h2>{{ $isi->judul }}</h2>
                                    </span>
                                  </a>
                                </div>
                                @endforeach
                              <!-- END post -->
                            </div>
                                  
                            </div>
                        </div>
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
      