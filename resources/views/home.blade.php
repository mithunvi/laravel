@extends('app')

@section('content')
<h2 class="text-danger">User Reg</h2>
<div><?php 
if(Session::has('success_message')){
		echo Session::get('success_message');
	}
	?>
	</div>
<div>

	<form action="/insert" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		Name : <input type="text" name="name"><br/>
		Email : <input type="email" name="email"><br/>
		<input type="submit" value="submit">
	</form>

</div>

@endsection