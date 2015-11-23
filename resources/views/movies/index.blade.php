@extends('layout/layout')
@extends('layout/navbar')
@section('content')

<div class="container row">
	<div id="new_movies" class="movieList">
		<h2>Top Movies</h2>
		<div class="container featureMovies">
		@foreach ($find as $movies)
			
			{{-- @for ($i = 0; $i < 1; $i++) --}}
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="{{ $movies->image }}">
					<a href="/metamovies/{{ $movies->slug }}"><h3>{{ $movies->title }}</h3></a>
					<p>{{ $movies->synopsis }}</p>
					{{-- <div><img src="{{ $movies->image }}" alt=""></div> --}}
				</div>
			{{-- @endfor --}}

			@endforeach
		</div>				
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="">
			{!! $find->render() !!}	
		</div>
	</div>
</div>	

<div id="movie_top" class="movieList">
	<div></div>
	<h2>New Movies</h2>
		<div class="container featureMovies">
			@foreach ($find as $movies)
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="{{ $movies->image }}">
					<a href="/metamovies/{{ $movies->slug }}"><h3>{{ $movies->title }}</h3></a>
					<p>{{ $movies->synopsis }}</p>
					{{-- <div><img src="{{ $movies->image }}" alt=""></div> --}}
				</div>
			@endforeach 
		</div>				
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="">
			{!! $find->render() !!}	
		</div>
	</div>
</div>	
@stop