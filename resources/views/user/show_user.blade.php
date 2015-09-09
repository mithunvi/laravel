@extends('app')

@section('content')
	@if(Session::has('success_message'))
	{{Session::get('success_message')}}
	@endif
	<table border="1px solid gold">
		<th class="text-danger">Name</th>
		<th class="text-danger">Email</th>
		<th>Entry Time</th>
		<th>Updated_at</th>
		<th>ADD</th>
		<th>Delete</th>
		<th>Update</th>
		@foreach($data as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{date('d M y', strtotime($user->created_at))}}</td>
			<td>{{date('d M y', strtotime($user->updated_at))}}</td>
			<td><a href="/hosue">Add</a></td>
			<td><a href="/delete/{{$user->id}}">Delete</a></td>
			<td><a href="/edit/{{$user->id}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
@endsection