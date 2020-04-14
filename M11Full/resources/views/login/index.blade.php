<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Welcome to Bus ticket Reseravation system</h1>
	<h2>Sign in</h2>
	<form method="post" >
		@csrf
<!-- 		{{csrf_field()}} -->		
<!-- 		<input type="hidden" name="_token" value="{{csrf_token()}}"> -->
        
		Email:  <input type="text" name="uname" > <br>
		Password: <input type="password" name="password" ><br>
		<input type="submit" name="submit" value="login" >
	</form>

	<h3>{{session('msg')}}</h3>
</body>
</html>