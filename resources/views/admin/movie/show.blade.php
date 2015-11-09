@extends('admin.layout')

@section('content')

<div class="row">
    <div class="container">
          <form role="form">
            <div class="form-group">
              <label for="search" class="col-xs-2 control-label hide">Search</label>
              <div class="col-xs-offset-2 col-xs-8 input-group">
                  <input type="text" class="form-control input-lg input_black" id="search" placeholder="Enter Movie Title">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-lg">Search</button>
                  </div>
              </div>
            </div>
          </form>
    </div> 
</div>
	
	<div class="container">
		<div class="movieImg">
			<img src="" alt="">
		</div>
		<div class="movieInfo">
			<h1>{{$movie->title}}</h1>
			<img src="{{$movie->image}}">
			<p>{{$movie->synopsis}}</p>
			<ul>
				<li>{{$movie->director}}</li>
				<li>{{$movie->writer_1}}</li>
				<li>{{$movie->writer_2}}</li>
				<li>Relesase Date: {{$movie->release_date->format('Y')}}</li>
				<li>Actors: {{$movie->actor_1}}, {{$movie->actor_2}}, {{$movie->actor_3}}</li>
				<li>Categorie: {{$movie->categories}}</li>
				<li>Rating: {{$movie->rating}}</li>
			</ul>
		</div>
	</div>
</body>
</html>

@stop