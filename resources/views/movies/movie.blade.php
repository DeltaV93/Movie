@extends('layout.layout')

@section('content')
{{-- <nav class="navbar navbar-default" role="navigation">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="http://mmovie.dev/">Meta + Movies</a>
     </div>
 
     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse navbar-ex1-collapse">
         <ul class="nav navbar-nav">
             <li class="active"><a href="#new_movies">New Movies</a></li>
             <li><a href="#movie_top">Top Movies</a></li>
         </ul>
         <form class="navbar-form navbar-right" role="search">
             <div class="form-group">
                 <input type="text" class="form-control" placeholder="Search">
             </div>
             <button type="submit" class="btn btn-default">Search</button>
         </form>
         <ul class="nav navbar-nav navbar-right">
             <li><a href="./siginup">Sigin Up</a></li>
             <li class="dropdown">
                 <a href="./login" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                     <li><a href="#">Action</a></li>
                     <li><a href="#">Another action</a></li>
                     <li><a href="#">Something else here</a></li>
                     <li><a href="#">Separated link</a></li>
                 </ul>
             </li>
         </ul>
     </div><!-- /.navbar-collapse -->
 </nav> --}}

<div class="row">
    <div class="container">
          {{-- <form role="form"> --}}
            {!! Form::open(['method' => 'GET'])!!}   
                <div class="form-group">
                  <div class="col-xs-offset-2 col-xs-8 input-group">
            {!! Form::input('search', 'q', null, ['placeholder' => 'Find Stuff'],['class' => 'form-control input-lg input_black']) !!}
                  <div class="input-group-btn">
                      <button type="submit" class="btn btn-primary btn-lg">Search</button>
                  </div>
            {!! Form::close()!!}            
{{--             <div class="form-group">
              <label for="search" class="col-xs-2 control-label hide">Search</label>
              <div class="col-xs-offset-2 col-xs-8 input-group">
                  <input type="text" class="form-control input-lg input_black" id="search" placeholder="Enter Movie Title">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-lg">Search</button>
                  </div>
              </div>
            </div> --}}

          {{-- </form> --}}
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
				<li>Relesase Date: {{$movie->release_date->format('F Y')}}</li>
				<li>Actors: {{$movie->actor_1}}, {{$movie->actor_2}}, {{$movie->actor_3}}</li>
				<li>Categorie: {{$movie->categories}}</li>
				<li>Rating: {{$movie->rating}}</li>
			</ul>
		</div>
	</div>
</body>
</html>
@stop