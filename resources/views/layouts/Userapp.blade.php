<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('img/logos/honeywolrd.png')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/rev-settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles-5.css')}}" id="main_styles">

</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div id="preloader">
        <div class="lds-ellipsis">
           <div></div>
           <div></div>
           <div></div>
           <div></div>
        </div>
     </div>
     <div id="top-bar" class="hidden-md-down">
        <div class="container">
           <div class="row">
              <div class="col-md-9 col-12">
                 <ul class="top-bar-info">
                    <li><i class="fas fa-phone"></i> +263778105788 | +263773027200 </li>
                    <li><i class="fas fa-map-marker-alt"></i>10 Clare Road, Hillside, Bulawayo Zimbabwe</li>
                    <li><i class="fa fa-envelope"></i>info@honeyworld.co.zw</li>
                 </ul>
              </div>
              <div class="col-md-3 col-12">
                 <ul class="social-icons hidden-sm">
                 <li><div class="fb-like" data-href="https://www.facebook.com/honeyworldzimbabwe/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/honeyworldzimbabwe/"><i class="fab fa-facebook"></i></a></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <header>
        <nav id="navigation4" class="container navigation">
           <div class="nav-header">
              <a class="nav-brand" href="{{ url ('/') }}"><img src="{{ asset('img/logos/honeywolrd.png') }}" class="main-logo" alt="logo" id="main_logo"></a>
              <div class="nav-toggle"></div>
           </div>
           <div class="nav-menus-wrapper">
              <ul class="nav-menu align-to-right">
                 <li>
                    <a href="{{ url('/') }}">Home</a>
                 </li>
                 <li>
                    <a href="{{ url('about') }}">About Us</a>
                 </li>


                 <li>
                    <a href="#">Products & Services</a>

                       <ul class="nav-dropdown">
                         <li>

                         <a href="#"><b>Services</b></a>
                         <ul class="nav-dropdown">
                             <li>
                                   <a href="{{ url('BeeRemoval') }}">Bee Removal</a>
                                </li>
                                <li>
                                   <a href="{{ url('Apiary') }}">Apiary Setup</a>
                                </li>
                                <li><a href="{{ url('Training') }}">Beekeeping Training</a></li>

                                <li><a href="{{ url('Equipment') }}">Bee keeping Equipment</a></li>
                         </ul>

                         </li>


                          <li>

                             <a href="#"><b>Products</b></a>
                             <ul class="nav-dropdown">
                             <li>
                             <a href="{{ url('Products') }}">Bee Products</a>
                          </li>
                             </ul>

                             </li>

                       </ul>
                 </li>


                 <li>
                    <a href="{{ url('Sustainable') }}">Sustainable Impact </a>
                 </li>

                 <li>
                    <a href="{{ url('Blog') }}">Our Blog</a>
                 </li>

                 <!-- <li>
                    <a href="#">Our Blog</a>
                 </li>  -->

                 <li>
                    <a href="{{ url('Contact') }}">Contact Us</a>
                 </li>
                 <!-- <li>
                    <a href="donate.php">Donate Now</a>
                 </li> -->

              </ul>
           </div>
        </nav>
     </header>


            @yield('content')






      <footer>
         <div class="footer-1">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 col-sm-6 col-12">
                     <a href="#"><img id="footer_logo" src="{{ asset('img/logos/logo-footer.html') }}" alt="logo"></a>
                     <p class="mt-20">Established in 2016, Honeyworld Zimbabwe (Private) Limited (HWZ), is a social enterprise whose aim is to support the marginalized rural farmers.</p>
                     <ul class="social-links-footer">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-sm-6 col-12">
                     <h2>Extra Links</h2>
                     <div class="row mt-25">
                        <div class="col-md-6 col-sm-6">
                           <ul class="footer-nav">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Shop</a></li>
                              <li><a href="#">Contact Us</a></li>
                              <li><a href="#">Gallery</a></li>
                           </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <ul class="footer-nav">
                              <li><a href="#">Business</a></li>
                              <li><a href="#">Consulting</a></li>
                              <li><a href="#">Development</a></li>
                              <li><a href="#">Careers</a></li>
                              <li><a href="#">Latest News</a></li>
                              <li><a href="#">Contact us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-12">
                     <h2>Recent news</h2>
                     <ul class="footer-news mt-25">
                        <li> <a href="#">We are excited to launch our new special product offering "Honeyworld Combed Honey".</a> <strong><i class="fa fa-calendar"></i> 11 September 2019</strong> </li>
                        <li> <a href="#">Many of those who tried our honey have become regular customers</a> <strong><i class="fa fa-calendar"></i> 7 September 2019</strong> </li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-sm-6 col-12">
                     <h2>Subscribe</h2>
                     <form class="footer-subscribe-form mt-25">
                        <div class="d-table full-width">
                           <div class="d-table-cell"> <input type="text" placeholder="Your Email adress"> </div>
                           <div class="d-table-cell"> <button type="submit"><i class="fas fa-envelope"></i></button> </div>
                        </div>
                     </form>
                     <p class="mt-10">Get latest updates and offers.</p>
                  </div>
               </div>
               <div class="footer-1-bar">
               <p> <a href="{{ url('/home') }}" style="color:#FD6702;">Honeyworldzimbabwe</a>  © 2019. All Rights Reserved. Design by <a href="http://alpham.co.zw" style="color:#FD6702;" target="_blank">alpham.co.zw</a></p>
               </div>
            </div>
         </div>
      </footer>
      <a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>
      <script src="js/jquery.min.js"></script><script src="js/plugins.js"></script><script src="js/Chart.bundle.js"></script><script src="js/utils.js"></script><script src="js/navigation.js"></script><script src="js/navigation.fixed.js"></script><script src="js/map.js"></script><script src="js/rev-slider/jquery.themepunch.tools.min.js"></script><script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script><script src="js/rev-slider/revolution.extension.actions.min.js"></script><script src="js/rev-slider/revolution.extension.carousel.min.js"></script><script src="js/rev-slider/revolution.extension.kenburn.min.js"></script><script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script><script src="js/rev-slider/revolution.extension.migration.min.js"></script><script src="js/rev-slider/revolution.extension.parallax.min.js"></script><script src="js/rev-slider/revolution.extension.navigation.min.js"></script><script src="js/rev-slider/revolution.extension.slideanims.min.js"></script><script src="js/rev-slider/revolution.extension.video.min.js"></script><script src="js/main.js"></script>

</body>
</html>
