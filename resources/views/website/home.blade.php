<!DOCTYPE html>
<html lang="en">
   <head>
      @include('website.partials.css')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        
      @include('website.partials.header')
         <!-- banner section start -->
         @include('website.partials.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      @include('website.partials.service')
      <!-- services section end -->
      <!-- about section start -->
      @include('website.partials.about')
      <!-- about section end -->

      <!-- client section start -->
      @include('website.partials.testimonial')
      <!-- client section start -->
      <!-- choose section start -->
      @include('website.partials.choose')
      <!-- choose section end -->
      <!-- footer section start -->
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