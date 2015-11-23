@extends('admin.layout')


@section('content')
<div class="container-fluid"> 
<div class="row page-title-row">
	<div class="col-md-12">
		<h3>Movie <small>&raquo; Add New Movie</small></h3>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default"> 
			<div class="panel-heading">
				<h3 class="panel-title">New Movie Form</h3> 
			</div>
				<div class="panel-body">


				{!! Form::open(['url' => 'admin', 'file' => true],array('class' => 'form-horizontal'))!!}
				@include('admin.partial.form',['submitButtonText' => 'Add Movie'])

				{!! Form::close()!!}
				
			</div>
		</div>
	</div>
</div>
</div>

{{--  @if (count($errors) > 0) 
	<div class="alert alert-danger">
		<strong>Whoops!</strong>
		There were some problems with your input.<br><br>
		<ul>
		  @foreach ($errors->all() as $error)
		    <li>{{ $error }}</li>
		  @endforeach
		</ul>
	</div>
@endif --}}
	@include('admin.partial.errors')
@stop
