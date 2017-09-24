@extends ('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">
	<div style="margin-bottom:15px;">
	<img src="<?php echo url('/download/'.$post->image) ?>"  width="650px" height="400px" />
</div>
	<h1 style="font-size:40px;"> {{ $post -> title}}  </h1>
	<hr>

	<p style="padding-top:10px; padding-bottom: 20px;"> {{$post->body}} </p>

	<div class="comment">
		<hr>
		<ul class="list-group">

			@foreach($post->comments as $comment)
				<li class="list-group-item">
					<article>
						
						{{ $comment->body }} <br> <br>
						<p style="font-size:15px; color:gray;"> {{ $comment->created_at->diffForHumans() }} <br>
						by {{$comment->user->name }}  </p>
		
					</article>
				</li>
			@endforeach

		</ul>
	</div>
	<hr>

	<div class="card" style="padding:10px;">
		<div class="card-block">

		<form method="POST" action="/posts/{{ $post->id }}/comments/">

		{{ csrf_field() }}

			<div class="form-group">

			<textarea name="body" placeholder="Add comment here" class="form-control"></textarea>

			</div>

			<div class="form-group" style="padding:10px;">
  				<button type="submit" class="btn btn-primary"> Add comment</button>
  			</div>

		</form>
		@include ('layouts.errors')
		</div>
	</div>


</div>

@endsection