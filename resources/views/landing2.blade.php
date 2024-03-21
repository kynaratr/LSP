<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Ruby Travel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor2/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets2/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                      <h1>Ruby Travel</h1>
                  </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                    @if (Route::has('login'))
                      @auth
                      <li class="scroll-to-section"><a href="{{ url('/home') }}">Home</a></li>
                      @else
                      <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li>
                      @if (Route::has('register'))
                      <li class="scroll-to-section"><a href="{{ route('register') }} ">Register Now!</a></li>
                      @endif
                      @endauth
                      @endif
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Lihatlah Sekilas Ke Negara Yang Indah Dari:</h2>
              <h1>Caribbean</h1>
              <div class="border-button"><a href="/aboutc">Go There</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Populasi:</span><br>44.48 M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Wilayah:</span><br>275.400 KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Harga</span><br>Rp 6.095.000</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="/aboutc">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Lihatlah Sekilas Ke Negara Yang Indah Dari:</h2>
              <h1>Switzerland</h1>
              <div class="border-button"><a href="/abouts">Go There</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Populasi:</span><br>8.66 M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Wilayah:</span><br>41.290 KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Harga</span><br>Rp 27.999.999</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="/abouts">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Lihatlah Sekilas Ke Negara Yang Indah Dari:</h2>
              <h1>France</h1>
              <div class="border-button"><a href="/aboutf">Go There</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Populasi:</span><br>67.41 M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Wilayah:</span><br>551.500 KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Harga</span><br>Rp 18.012.792</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="/aboutf">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Lihatlah Sekilas Ke Negara Yang Indah Dari:</h2>
              <h1>Thailand</h1>
              <div class="border-button"><a href="/abouth">Go There</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Populasi:</span><br>69.86 M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Wilayah:</span><br>513.120 KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>Harga</span><br>Rp. 2.139.000</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="/abouth">Explore More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
        </div>
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="visit-country">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Kunjungi Salah Satu Negara Kami Sekarang</h2>
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="items">
            <div class="row">
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{asset('assets2/images/country-01.jpg')}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>SWITZERLAND</h4>
                        <span>Europe</span>
                        <div class="main-button">
                          <a href="/abouts">Explore More</a>
                        </div>
                        <p>Switzerland, negara yang memiliki keunikan tersendiri dengan suasana yang tenang dan damai, serta budaya yang kaya akan warisan sejarah.</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> 8.66 Mil Populasi</li>
                          <li><i class="fa fa-globe"></i> 41.290 km2</li>
                          <li><i class="fa fa-home"></i> Rp 27.999.999</li>
                        </ul>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{asset('assets2/images/country-02.jpg')}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>CARIBBEAN</h4>
                        <span>North America</span>
                        <div class="main-button">
                          <a href="/aboutc">Explore More</a>
                        </div>
                        <p>Jelajahi keindahan alam dan warisan budaya di negara Caribbean, di mana kehidupan terasa begitu damai dan harmonis.</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> 44.48 Mil Populasi</li>
                          <li><i class="fa fa-globe"></i> 275.400 km2</li>
                          <li><i class="fa fa-home"></i> Rp 6.095.000</li>
                        </ul>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item last-item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{asset('assets2/images/country-03.jpg')}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>FRANCE</h4>
                        <span>Europe</span>
                        <div class="main-button">
                          <a href="/aboutf">Explore More</a>
                        </div>
                        <p>Di antara gemerlapnya negara-negara di dunia, France menonjol dengan keunikan dan kemewahan.</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> 67.41 Mil Populasi</li>
                          <li><i class="fa fa-globe"></i> 551.500 km2</li>
                          <li><i class="fa fa-home"></i> Rp 18.012.792</li>
                        </ul>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{asset('assets2/images/h2.jpg')}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>Thailand</h4>
                        <span>Asia</span>
                        <div class="main-button">
                          <a href="/abouth">Explore More</a>
                        </div>
                        <p>Eksotis: Thailand terkenal dengan pesonanya yang eksotis, dengan pasar yang ramai, kuil-kuil megah, dan warisan tradisi yang kaya yang membangkitkan indera.</p>
                        <ul class="info">
                          <li><i class="fa fa-user"></i> 44.48 Mil Populasi</li>
                          <li><i class="fa fa-globe"></i> 253.400 km2</li>
                          <li><i class="fa fa-home"></i> Rp. 2.139.000</li>
                        </ul>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              </div>
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </div>

  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>APAKAH ANDA INGIN BEPERGIAN?</h2>
          <h4>Lakukan Reservasi Dengan Mengklik Tombol</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
          @if (auth()->check())
    <a href="{{ route('reservasi.create') }}">Book Yours Now</a>
@else
    <a href="{{ route('register') }}">Register Now</a>
@endif

          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor2/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor2/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('assets2/js/isotope.min.js')}}"></script>
  <script src="{{asset('assets2/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets2/js/wow.js')}}"></script>
  <script src="{{asset('assets2/js/tabs.js')}}"></script>
  <script src="{{asset('assets2/js/popup.js')}}"></script>
  <script src="{{asset('assets2/js/custom.js')}}"></script>

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>
