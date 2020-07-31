<!doctype html>
<html lang="en">

  <head>
    <title>Wedding Organizer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Muli:400,700|Hepta+Slab:400,700&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('tampilandepan/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('tampilandepan/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('tampilandepan/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('tampilandepan/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('tampilandepan/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('tampilandepan/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('tampilandepan/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('tampilandepan/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('tampilandepan/css/style.css')}}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="http://127.0.0.1:8000/" class="font-weight-bold">Welcome</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="/" class="nav-link">Home</a></li>
                  <li><a href="/abouts" class="nav-link">About</a></li>
                  <li><a href="/photography" class="nav-link">Photography</a></li>
                  <li><a href="/event" class="nav-link">Event</a></li>
                  <li><a href="/contact" class="nav-link">Contact</a></li>
                  <li><a href="/login" class="nav-link">Login</a></li>
                  
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>


@yield('isihome')


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">About Me</h2>
                <p>Navithura is an Information Technology undergraduate from ADVANCED TECHNOLOGICAL INSTITUTE LABUDUWA  </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Navithara tharumini | E Studio (Pvt) Ltd  <i class="icon-heart text-danger" aria-hidden="true"></i> 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="{{asset('tampilandepan/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('tampilandepan/js/popper.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('tampilandepan/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('tampilandepan/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('tampilandepan/js/aos.js')}}"></script>

    <script src="{{asset('tampilandepan/js/main.js')}}"></script>

  </body>

</html>

