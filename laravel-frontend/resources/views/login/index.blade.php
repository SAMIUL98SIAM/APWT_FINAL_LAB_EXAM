<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post">
	<table>
	    <!--@csrf-->
		<!--{{csrf_field()}}-->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<tr>
			<td>Name</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td><span></span> 
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="submit"></td>
		</tr>
	</table>
	</form>
	{{session('msg')}}
		<br>
        <br>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>