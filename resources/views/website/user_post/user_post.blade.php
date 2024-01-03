<!DOCTYPE html>
<html lang="en">
   <head>
      @include('website.partials.css')
      <style type="text/css">
        post_deg
        {
            font-size: 300px;
            color: red;
        }
      </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        
      @include('website.partials.header')
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner" style="text-align: center;">
                  <h1 class="post_deg">Post Title</h1>
                  <p style="des_deg">Post Description</p>
               </div>
            </div>
         </div>
         <div>
               
         </div>
         
         <!-- banner section end -->
      </div>


      

        @include('website.partials.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      @include('website.partials.script')    
   </body>
</html>