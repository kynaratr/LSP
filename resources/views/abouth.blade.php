<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>More About Thailand</title>

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
  <div class="about-main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg"></div>
            <h4>JELAJAHI NEGARA KITA</h4>
            <div class="line-dec"></div>
            <h2>Selamat datang DI Thailand</h2>
            <p>Negara Gajah Putih: Thailand sering disebut sebagai "Negara Gajah Putih" karena memiliki budaya dan tradisi yang kaya serta merupakan rumah bagi banyak kuil dan patung gajah.</p>
            <div class="main-button">
              <!-- <a href="/reservasi.blade.php">Discover More</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Kota Kota di <em>Thailand</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                <div class="item">
                  <div class="thumb">
                    <img src="assets2/images/h1.jpg" alt="">
                    <h4>Bangkok</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets2/images/h2.jpg" alt="">
                    <h4>Ciangmai</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets2/images/h3.jpg" alt="">
                    <h4>Pattaya</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets2/images/h4.jpg" alt="">
                    <h4>Phuket</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets2/images/h1.jpg" alt="">
                    <h4>Bangkok</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets2/images/h2.jpg" alt="">
                    <h4>Ciangmai</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets2/images/h3.jpg" alt="">
                    <h4>Pattaya</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets2/images/h4.jpg" alt="">
                    <h4>Phuket</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="weekly-offers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
          <h2>Penawaran Mingguan Terbaik Di Setiap Kota</h2>
            <p>Banyak Macam diskon Menunggu Anda</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-weekly-offers owl-carousel">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-01.jpg" alt="">
                <div class="text">
                  <h4>Bangkok<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp 50.000<br><span>/orang</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                  @if (auth()->check())
    <a href="{{ route('reservasi.create') }}">Make a Reservation</a>
@else
    <a href="{{ route('register') }}">Register Now</a>
@endif
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-02.jpg" alt="">
                <div class="text">
                  <h4>Ciangmai<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp 50.000<br><span>/orang</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                  @if (auth()->check())
    <a href="{{ route('reservasi.create') }}">Make a Reservation</a>
@else
    <a href="{{ route('register') }}">Register Now</a>
@endif
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-03.jpg" alt="">
                <div class="text">
                  <h4>Pattaya<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp 50.000<br><span>/orang</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                  @if (auth()->check())
    <a href="{{ route('reservasi.create') }}">Make a Reservation</a>
@else
    <a href="{{ route('register') }}">Register Now</a>
@endif
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-01.jpg" alt="">
                <div class="text">
                  <h4>Phuket<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp 50.000<br><span>/orang</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                  @if (auth()->check())
    <a href="{{ route('reservasi.create') }}">Make a Reservation</a>
@else
    <a href="{{ route('register') }}">Register Now</a>
@endif
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-02.jpg" alt="">
                <div class="text">
                  <h4>Krabi<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp 50.000<br><span>/orang</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                  @if (auth()->check())
    <a href="{{ route('reservasi.create') }}">Make a Reservation</a>
@else
    <a href="{{ route('register') }}">Register Now</a>
@endif
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-03.jpg" alt="">
                <div class="text">
                  <h4>Ayuthayya<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp 50.000<br><span>/orang</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                  @if (auth()->check())
    <a href="{{ route('reservasi.create') }}">Make a Reservation</a>
@else
    <a href="{{ route('register') }}">Register Now</a>
@endif
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

  <!-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Ruby Travel</a> Company. All rights reserved. 
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer> -->


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
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
