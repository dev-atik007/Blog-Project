<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ url('assets/website/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url ('assets/website/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ url('assets/website/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ url('assets/website/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ url('assets/website/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ url('assets/website/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ url('assets/website/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      @include('sweetalert::alert')
      
      <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="{{ url('assets/website/images/logo.png') }}"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="assets.website.index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="contact.html">Contact</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="{{ url('assets/website/images/logo.png') }}"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="{{ url('assets.website.index.html') }}">Home</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="services.html">Services</a></li>
                     <li><a href="blog.html">Blog</a></li>
                     
                     @if (Route::has('login'))

                     @auth
                     <li>
                        <x-app-layout>
                        </x-app-layout>
                     </li>
                     <li><a href="{{ route('create.post') }}">Create Post</a></li>
                     @else
                     <li><a href="{{ route('login') }}">Login</a></li>
                     <li><a href="{{ route('register') }}">Register</a></li>
                     @endauth

                     @endif
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Add Post</h1>
          <div class="email_text">
                <form action="{{ route('post.sotre') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <input type="text" class="massage-bt" placeholder="Title" name="title" required>
                    </div>

                    <div class="form-group">
                        <textarea class="massage-bt" name="description" placeholder="Description" rows="5" id="comment" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="file" class="email-bt" placeholder="Image" name="image" required>
                    </div>
                    

                    <div>
                        <input style="font-size: large;" type="submit" value="Add Post">
                    </div>

                </form>
          </div>
        </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="input_btn_main">
               <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
            <div class="location_main">
               <div class="call_text"><img src="{{ url('assets/website/images/call-icon.png') }}"></div>
               <div class="call_text"><a href="#">Call +01 1234567890</a></div>
               <div class="call_text"><img src="{{ url('assets/website/images/mail-icon.png') }}"></div>
               <div class="call_text"><a href="#">demo@gmail.com</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="{{ url('assets/website/images/fb-icon.png') }}"></a></li>
                  <li><a href="#"><img src="{{ url('assets/website/images/twitter-icon.png') }}"></a></li>
                  <li><a href="#"><img src="{{ url('assets/website/images/linkedin-icon.png') }}"></a></li>
                  <li><a href="#"><img src="{{ url('assets/website/images/instagram-icon.png') }}"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ url('assets/website/js/jquery.min.js') }}"></script>
      <script src="{{ url('assets/website/js/popper.min.js') }}"></script>
      <script src="{{ url('assets/website/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ url('assets/website/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ url('assets/website/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ url('assets/website/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ url('assets/website/js/custom.js') }}"></script>
      <!-- javascript --> 
      <script src="{{ url('assets/website/js/owl.carousel.js') }}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>
