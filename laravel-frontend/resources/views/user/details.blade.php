@extends('../navbar')

	@section('navbar')
		<a href="/home"> Back</a> |
		<a href="/logout"> Logout </a> 
	@endsection

	@section('title')
	:: Details ::
	@endsection

	@section('page_title')
	User Details
	@endsection

	@section('main_content')

	<form method="post">
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$user['user_id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$user['username']}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{$user['password']}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$user['name']}}</td>
		</tr>
		<tr>
			<td>Dept</td>
			<td>{{$user['dept']}}</td>
		</tr>
		<tr>
			<td>CGPA</td>
			<td>{{$user['cgpa']}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$user['type']}}</td>
		</tr>
	</table>
	</form>
	@endsection

