@extends('layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-6">
        <h3>newMoviess <small>» Listing</small></h3>
      </div>
      <div class="col-md-6 text-right">
        <a href="/admin/newMovies/create" class="btn btn-success btn-md">
          <i class="fa fa-plus-circle"></i> New newMovies
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">



        <table id="newMoviess-table" class="table table-striped table-bordered">
          <thead>
          <tr>
            <th>newMovies</th>
            <th>Title</th>
            <th class="hidden-sm">Subtitle</th>
            <th class="hidden-md">Page Image</th>
            <th class="hidden-md">Meta Description</th>
            <th class="hidden-md">Layout</th>
            <th class="hidden-sm">Direction</th>
            <th data-sortable="false">Actions</th>
          </tr>
          </thead>
          <tbody>
          {{-- @foreach ($newMovies as $newMovies) --}}
            <tr>
              {{-- <td>{{ $newMovies->newMovies }}</td> --}}
              {{-- <td>{{ $newMovies->title }}</td> --}}
              {{-- <td class="hidden-sm">{{ $newMovies->subtitle }}</td> --}}
              {{-- <td class="hidden-md">{{ $newMovies->page_image }}</td> --}}
              {{-- <td class="hidden-md">{{ $newMovies->meta_description }}</td> --}}
              {{-- <td class="hidden-md">{{ $newMovies->layout }}</td> --}}
              <td class="hidden-sm">
                {{-- @if ($newMovies->reverse_direction) --}}
                  Reverse
                {{-- @else --}}
                  Normal
                {{-- @endif --}}
              </td>
              <td>
                {{-- <a href="/admin/newMovies/{{ $newMovies->id }}/edit" --}}
                   class="btn btn-xs btn-info">
                  <i class="fa fa-edit"></i> Edit
                </a>
              </td>
            </tr>
          {{-- @endforeach --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{{-- @stop --}}

{{-- @section('scripts') --}}
  <script>
    $(function() {
      $("#newMoviess-table").DataTable({
      });
    });
  </script>
{{-- @stop --}}