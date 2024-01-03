@extends('admin.partials.app')
@section('admin.dashboard')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                <a href="{{ route('post.index') }}" class="btn btn-info">Post List</a>
                  <div class="card-body">
                    <h4 class="card-title">Create Post</h4>
                    <form action="{{ route('post.update', $post->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <input type="text" name="description" value="{{ $post->description }}" class="form-control" placeholder="Description">
                      </div>
                      <div>
                        <label>Old Image</label>
                          <img src="/postImage/{{ $post->image }}" width=100 alt="">
                      </div>
                      <div class="form-group">
                        <label>Add Image</label>
                          <input type="file" name="image" class="form-control" placeholder="Image">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>   
@endsection