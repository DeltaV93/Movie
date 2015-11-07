@extends('layout/layout')
@extends('layout/navbar')
@section('content')

<div class="container row">
	<div id="new_movies" class="movieList">
		<h2>Top Movies</h2>
		<div class="container">
		@foreach ($movies as $movies)
			
			{{-- @for ($i = 0; $i < 1; $i++) --}}
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<a href="/metamovies/{{ $movies->slug }}"><h3>{{ $movies->title }}</h3></a>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolorem alias accusantium temporibus</p>
					<div><img src="" alt=""></div>
				</div>
			{{-- @endfor --}}

			@endforeach
		</div>				
	</div>
</div>

	<div id="movie_top" class="movieList">
		<h2>New Movies</h2>
		<div class="container">
			@foreach ($movies as $movie)
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<a href="/metamovies/{{ $movies->slug }}"><h3>{{ $movies->title }}</h3></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dolorem alias accusantium temporibus</p>
					<div><img src="" alt=""></div>
				</div>
			@endforeach 
		</div>				
	</div>
</div>
@stop