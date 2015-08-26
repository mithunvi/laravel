@extends('app')

@section('pol')
<table border="1px solid gold">
	<th class="text-danger">Name</th>
	<th>Entry Time</th>
	@foreach($user as $user)
	<tr>
		<td>{{$user->name}}</td>
		<td>{{date('d F Y', strtotime($user->created_at))}}</td>
	</tr>
	@endforeach
</table>
@endsection