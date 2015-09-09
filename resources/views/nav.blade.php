<nav class="navbar" >	 
	<ul class="nav navbar-nav">
		<li><a href="/show_user">Home</a></li>
		@if(Auth::guest())
		<li><a href="/auth/register">Register</a></li>
		<li><a href="/auth/login">login</a></li>	
		@endif

		@if(!Auth::guest())
		<li><a href="/auth/logout">Log Out</a></li>				
		@endif
	</ul>
</nav>