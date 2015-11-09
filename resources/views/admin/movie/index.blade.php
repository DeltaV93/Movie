@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title">Meta+ Movies</h3>
            <div class="text-right">
              <a href="admin/create" class="btn btn-success btn-sm">
                <i class="fa fa-plus-circle"></i> Add New Movie
              </a>
            </div>
          </div>

          <div class="panel-body">
            {!! Form::open(['method' => 'GET'])!!}   
                <div class="form-group">
                  <div class="col-xs-offset-2 col-xs-8 input-group">
            {!! Form::input('search', 'q', null, ['placeholder' => 'Find Stuff'],['class' => 'form-control input-lg input_black']) !!}
                  <div class="input-group-btn">
                      <button type="submit" class="btn btn-primary btn-lg">Search</button>
                  </div>
            {!! Form::close()!!}
              </div>
            </div>
          </form>

          </div>
        <table class="table push-down">
          <thead>
            <tr>
              <th>Image</th>
              <th>Movie Title</th>
              <th>Released</th>
              <th>Director</th>
              <th>Rating</th>
              <th>Actors</th>              
              <th>Categories</th>
              <th>Stars</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach ($movies as $movies)
            <tr>
              <td><img style="width: 75px" src="{{ $movies->image}}" alt="Placeholder Movie Image"></td>
              <td><a href="/metamovies/{{ $movies->slug }}">{{ $movies->title }}</a></td>
              <td>{{ $movies->release_date->format('F Y') }}</td>
              <td>{{ $movies->director }}</td>
              <td>{{ $movies->rating }}</td>
              <td>{{ $movies->actor_1 }}, {{ $movies->actor_2 }}, {{ $movies->actor_3 }}</td> 
              <td>{{ $movies->categories }}</td>
              <td><span class="glyphicon glyphicon-star"></span></td>
              <td><a href="/view" class="btn btn-primary">View</a></td>
              <td><a href="/admin/{{$movies->id}}/edit" class="btn btn-success">Edit</a></td>
            </tr> 
            @endforeach
          </tbody>
        </table>
    </div> <!-- /container -->
        </div>
      </div>
    </div>
  </div>

<script>
  $(function() {
    $("#newMoviess-table").DataTable({
    });
  });
</script>
@stop