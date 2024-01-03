<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blogs Post</h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  @foreach ($post as $post)                 
                  <div class="col-md-4">
                     <div><img src="/postImage/{{ $post->image }}" class="services_img"></div>
                     <div><h4 style="text-align: center;"><b>{{ $post->title }}</b></h4></div>
                     <div><p>Post by <strong>{{ $post->name }}</strong></p></div>
                     <div class="btn_main"><a href="{{ route('single.page',$post->id) }}">Read More</a></div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>