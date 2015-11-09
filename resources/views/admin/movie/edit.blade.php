@extends('admin.layout')

@section('content')

<div class="container-fluid"> 
<div class="row page-title-row">
	<div class="col-md-12">
		<h1>Edit: {!! $movies->title !!}</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default"> 
			<div class="panel-heading">
				<h3 class="panel-title">New Movie Form</h3> 
			</div>
				<div class="panel-body">


				{!! Form::model($movies, ['method' => 'PATCH', 'action' => ['AdminController@update', $movies->id]],array('class' => 'form-horizontal'))!!}

					@include('admin.partial.form',['submitButtonText' => 'Update Movie'])


				{!! Form::close()!!}
				
			</div>
		</div>
	</div>
</div>
</div>
@include('admin.partial.errors')

@stop
