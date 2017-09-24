@extends ('layouts.master')

@section('content')
<!-- <div class="container">

      <div class="row"> -->

        <div class="col-sm-8 blog-main">

          @foreach($posts as $post)

          @if(Auth::user()->id == $post->user_id)

          @include ('posts.article')
          
          @endif 

          @endforeach
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        

     <!--  </div><!-- /.row -->

  <!--  </div> <!-- /.container -->

@endsection
