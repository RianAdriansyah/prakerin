
            <div class="col-md-12 col-lg-4 sidebar">
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <div class="bio text-center">
                  <img src="{{ asset('assets/frontend/images/mee.jpg') }}" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <h2>Rian Adriansyah</h2>
                    <p>My name is Rian Adriansyah, you can call me Rian, yan, RianAd, ian, 
                      or anything whatever you want. Welcome to my profile, my simple profile i guess..
                       I'd love to sharing my experiences too, I love something that makes sense for me.
                        OK that's just an intermezzo, Let's get started!</p>
                  <p><a href="{{ route('about') }}" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                    <p class="social">
                      <a target="blank" href="https://web.facebook.com/rian.adriansyah.98434" class="p-2"><span class="fa fa-facebook"></span></a>
                      <a target="blank" href="https://twitter.com/RianAd01" class="p-2"><span class="fa fa-twitter"></span></a>
                      <a target="blank" href="https://www.instagram.com/rian_ad01/" class="p-2"><span class="fa fa-instagram"></span></a>
                      <a target="blank" href="https://www.youtube.com/channel/UCo9Uy0N2dhhXHTeI8y7ywzw?view_as=subscriber" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- END sidebar-box -->  
             
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Brand</h3>
                <ul class="categories">
                  @php
                      $catall = \App\Kategori::all();
                  @endphp
                    @foreach($catall as $data)
                      {{-- @if ($data->Artikel->count > 0) --}}
                <li><a href="{{ route('category', $data->slug) }}" class="text-primary">{{ $data->nama_kategori }}
                  <span>{{ $data->Artikel->count() }}</span></a></li>
                    {{-- @endif --}}
                  @endforeach
                </ul>
              </div>
              <!-- END sidebar-box -->

              <div class="sidebar-box">
                <h3 class="heading">Tags</h3>
                <ul class="tags">
                  @php
                      $tagall = \App\Tag::all();
                  @endphp
                    @foreach($tagall as $navtag)
                      {{-- @if ($navtag->Artikel->count > 0) --}}
                    <li><a href="{{ route('tag', $navtag->slug) }}">{{ $navtag->nama_tag }}</a></li>
                      {{-- @endif --}}
                    @endforeach
                </ul>
              </div>
            </div>