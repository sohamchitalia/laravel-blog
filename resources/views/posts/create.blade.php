@extends ('layouts.master')


@section('content')
<div class="col-sm-8">
<h1 style="font-size:40px;"> Create a post </h1>
<hr>

<form method="POST" action="/posts" enctype="multipart/form-data">

	{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea  class="form-control" id="body" name="body"> </textarea>
  </div>
  <div class="form-group">
    <label for="featured_image">Feature Image</label>
    <input  type="file"  id="featured_image" name="featured_image" class="form-control"> 
  </div>
  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  @include ('layouts.errors')
</form>
</div>
@endsection