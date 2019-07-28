
            <div class="col-md-12 col-lg-4 sidebar">
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <div class="bio text-center">
                  <img src="{{ asset('assets/frontend/images/person_2.jpg') }}" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <h2>Rian Adriansyah</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                    <p><a href="about" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
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
                  <li><a href="{{ route('category', $data->slug) }}">{{ $data->nama_kategori }}<span>(12)</span></a></li>
                  @endforeach
                </ul>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
                    @foreach($tag as $navtag)
                    <li><a href="{{ route('tag', $navtag->slug) }}">{{ $navtag->nama_tag }}</a></li>
                    @endforeach
                </ul>
              </div>
            </div>