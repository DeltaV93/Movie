@extends('layout/layout')
@extends('layout/navbar')
@section('content')
<div class="center container">
	<form action="login" method="post"> 
			Username: 
			<input type="text" name="username">
			<br> 
			Password: 
			<input type="password" name="password"> 
		<div>
			<input type="submit" value="Submit">
		</div>
	</form>
</div>
@stop