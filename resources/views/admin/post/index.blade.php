@extends('admin.partials.app')

@section('admin.dashboard')
<section>

<div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    @if (session()->has('message'))
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                      </div>
                    @endif  


                    <h1 class="card-title"><strong>Post Index Page</strong></h1>
                      <a href="{{ route('post.create') }}" class="btn btn-success">Add new</a>
                    </p>
                    <table class="table" style="text-align: center;">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Post Title</th>
                          <th>Name</th>
                          <th>Post By</th>
                          <th>User Type</th>
                          <th>Description</th>
                          <th>Image</th>
                          <td>Action</td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $key=>$post )
                        <tr>
                          <th>{{ $key+1 }}</th>
                          <td>{{ $post->title }}</td>
                          <td>{{ $post->name }}</td>
                          <td>{{ $post->post_status }}</td>
                          <td>{{ $post->usertype }}</td>
                          <td>{{ Str::limit($post->description, 15) }}</td>
                          <td>
                            <img src="postImage/{{ $post->image }}" width=50>
                          </td>
                          <td>
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('post.delete', $post->id) }}" onclick="confirmation(event)" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach               
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
</section>
@endsection

<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to Delete this post",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {         
                window.location.href = urlToRedirect;               
            }  
        });        
    }
</script>