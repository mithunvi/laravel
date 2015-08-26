<h2>User Reg</h2>
<div><?php 
if(Session::has('success_message')){
		echo Session::get('success_message');
	}
	?></div>
<div>

	<form action="/do_reg" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="text" name="name">
		<input type="submit" value="submit">
	</form>

</div>