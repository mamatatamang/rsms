
<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">

</head>
<body>
<div class ="log_in">

<p>Welcome to Rsms</p>
<form action="{{ route('login')}}" method="POST">


 <input type="text" class="fname" name="username" placeholder="user name" >
@if($errors->has('username'))
						 	<span class="errormsg">{{ $errors->first('username')}}</span>
						 @endif



 <input type="password" class="pwd" name="password" placeholder="password">

@if($errors->has('password'))
						 	<span class="errormsg">{{ $errors->first('password')}}</span>
						 @endif






<input type="Submit" class="loginbtn" name="submit" value="Login to Rsms">

<a href="forgotpwd" class="fpwd">Forgot password?</a>
<img src="images/logbase.png" class="logbase">

<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>

</div>

</body>
</html>
