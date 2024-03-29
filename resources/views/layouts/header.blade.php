<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="{{asset('frontend/assets/images/favicon.png')}}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css')}}" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/fontawesome/css/all.min.css')}}">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/jquery-ui/jquery-ui.min.css')}}">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/modal-video/modal-video.min.css')}}">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/lightbox/dist/css/lightbox.min.css')}}">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/slick/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendors/slick/slick-theme.css')}}">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/style.css')}}">
      <title>Travele | Travel & Tour HTML5 template </title>
   </head>
   <body class="home">
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="{{asset('frontend/assets/images/loader1.gif')}}" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
         <header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 d-none d-lg-block">
                        <div class="header-contact-info">
                           <ul>
                              <li>
                                 <a href="#"><i class="fas fa-phone-alt"></i> +01 (977) 2599 12</a>
                              </li>
                              <li>
                                 <a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection#630a0d050c2337110215060f4d000c0e"><i class="fas fa-envelope"></i> <span class="__cf_email__" data-cfemail="b4d7dbd9c4d5dacdf4d0dbd9d5ddda9ad7dbd9">[email&#160;protected]</span></a>
                              </li>
                              <li>
                                 <i class="fas fa-map-marker-alt"></i> 1 Good Street, Glasgow
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                        <div class="header-social social-links">
                           <ul>
                              <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        <div class="header-search-icon">
                           <button class="search-icon">
                              <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-header">
               <div class="container d-flex justify-content-between align-items-center">
                  <div class="site-identity">
                     <h1 class="site-title">
                        <a href="{{url('/')}}">
                           <img class="white-logo" src="{{asset('frontend/assets/images/travele-logo.png')}}" alt="logo">
                           <img class="black-logo" src="{{asset('frontend/assets/images/travele-logo1.png')}}" alt="logo">
                        </a>
                     </h1>
                  </div>

                  <div class="header-btn">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{url('logout')}}}" style="color:#fff;" onclick="event.preventDefault(); this.closest('form').submit();" class="button-primary">Log Out</a>
                    </form>
                    @else
                     <a href="{{url('login')}}" style="margin-right: 5%;" class="button-primary">Login</a>
                     <a href="{{url('register')}}" class="button-primary">Register</a>
                     @endauth
                  </div>
               </div>
            </div>
            <div class="mobile-menu-container"></div>
         </header>
