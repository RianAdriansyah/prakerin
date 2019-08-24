
      <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p class="mb-4">
                <img src="{{ asset('assets/frontend/images/me.jpg') }}" alt="Image placeholder" class="img-fluid">
              </p>
            <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="{{ route('about') }}">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Brand</h3>
                    <ul class="list-unstyled">
                      @php
                          $cats = \App\Kategori::take(5)->get();
                      @endphp
                        @foreach($cats as $footcat)
                      <li><a href="{{ route('category', $footcat->slug) }}">{{ $footcat->nama_kategori }}</a></li>
                      @endforeach
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