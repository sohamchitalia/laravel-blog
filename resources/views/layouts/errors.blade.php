
@if(count($errors))

	<div class="form-group">
		<div class="alert alert-danger">

		<ul>
		@foreach($errors->all() as $error)  <!-- errors is an array variable present on 	every page. If no error then it is empty -->
		
			<li> {{ $error }} </li>
		
		
		@endforeach
		</ul>
		</div>
	</div>

@endif