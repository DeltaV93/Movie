@extends('admin.layout')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
          
          <div class="panel-heading">
            <h3 class="panel-title">Meta+ Movies</h3>
            <div class="text-right">
              <a href="admin/create" class="btn btn-success btn-sm">
                <i class="fa fa-plus-circle"></i> Add New Movie
              </a>
            </div>
          </div>

          <div class="panel-body col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
            {!! Form::open(['method' => 'GET'])!!}   
                <div class="form-group">
                  <div class="col-xs-offset-2 col-xs-8 input-group">
            {!! Form::input('search', 'q', null, ['placeholder' => 'movie Stuff'],['class' => 'form-control input-lg input_black']) !!}
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
              <th>ID</th>
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
              <th></th>
            </tr>
          </thead>
          <tbody>
          @foreach ($find as $movie)
            <tr>
              <td>{{ $movie->id }}</td>
              <td><img style="width: 75px" src="{{ $movie->image}}" alt="Placeholder Movie Image"></td>
              <td><a href="/metamovies/{{ $movie->slug }}">{{ $movie->title }}</a></td>
              <td>{{ $movie->release_date->format('F Y') }}</td>
              <td>{{ $movie->director }}</td>
              <td>{{ $movie->rating }}</td>
              <td>{{ $movie->actor_1 }}, {{ $movie->actor_2 }}, {{ $movie->actor_3 }}</td> 
              <td>{{ $movie->categories }}</td>
              <td><span class="glyphicon glyphicon-star"></span></td>
              <td><a href="/view" class="btn btn-primary">View</a></td>
              <td><a href="/admin/{{$movie->id}}/edit" class="btn btn-success">Edit</a></td>
              <td>
                  <form action="/admin/{{ $movie->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                      <button class="btn btn-danger">Delete</button>
                  </form>
              </td>
              {{-- <td><a href="#myModal"  type="button" data-toggle="modal" data-target="#myModal"class="btn btn-danger">Delete</a></td> --}}
            </tr> 
            @endforeach
            
          </tbody>

        </table>
    </div> <!-- /container -->

{{--  --}}
{!! $find->render() !!}
{{--  --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
  // $(function() {
  //   $("#newMoviess-table").DataTable({
  //   });
  // });
  // 
// $(document).ready(function() {
//   $('#myModal').modal('show'){
//     })
//   });
// });
</script>

@stop