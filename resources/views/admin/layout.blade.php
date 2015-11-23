<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Meta+ Movie</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery.js"></script> 
        {{-- @include('admin.partial.style') --}}
        {{-- <link rel="stylesheet" media="screen" href=`"//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="css/admin.css">
        
    </head>
<body>
{{-- Navigation Bar --}}
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse" data-target="#navbar-menu">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/admin">{{ config('blog.title') }} Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-menu">
      @include('admin.partial.navbar')
    </div>
  </div>
</nav>

@include('admin.partial.add')

@yield('content')

{{-- @yield('scripts') --}}

</body>
</html>