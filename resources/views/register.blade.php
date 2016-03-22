
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<!-- Latest compiled and minified CSS -->
	<!-- Latest compiled and minified CSS -->

<body>


			<div class="register">
				<p>NEW STAFF REGISTRATION</p>

					@if(Session::has('info'))
					<h4 class="myinfo">{{ Session::get('info') }}</h4>

					@endif


					<form action="{{ route('register') }}" method="post">
						 <input type="text" name="fname" class="frname" placeholder="first name" value="{{ Request::old('fname') }}" /><br/>
						 @if($errors->has('fname'))
						 	<span class="errormsg">{{ $errors->first('fname')}}</span>
						 @endif
						 <input type="text" name="lname" class="lname" placeholder="last name" value="{{ Request::old('lname') }}"/><br/>
						 @if($errors->has('lname'))
						 	<span class="errormsg">{{ $errors->first('lname')}}</span>
						 @endif

						 <input type="email" name="email" class="email" placeholder="email" value="{{ Request::old('email') }}"/><br/>
						 @if($errors->has('email'))
						 	<span class="errormsg">{{ $errors->first('email')}}</span>
						 @endif
						 <input type="text" name="contact" class="contact" placeholder="Contact" value="{{ Request::old('contact') }}"/><br/>
						 @if($errors->has('contact'))
						 	<span class="errormsg">{{ $errors->first('contact')}}</span>
						 @endif
						 <input type="text" name="tempaddress" class="tmpaddress" placeholder="temporary address" value="{{ Request::old('tempaddress') }}"/><br/>
						 @if($errors->has('tempaddress'))
						 	<span class="errormsg">{{ $errors->first('tempaddress')}}</span>
						 @endif
						 <input type="text" name="permaddress" class="prmntaddress" placeholder="permanent address" value="{{ Request::old('permaddress') }}"/><br/>
						 @if($errors->has('permaddress'))
						 	<span class="errormsg">{{ $errors->first('permaddress')}}</span>
						 @endif
						 <select name="role" class="fname">
						 	<option value="manager">Manager</option>
						 	<option value="staff">Staff</option>
						 </select>

						 <input type="text" name="username" class="username" placeholder="username" value="{{ Request::old('username') }}"/><br/>
						 @if($errors->has('username'))
						 	<span class="errormsg">{{ $errors->first('username')}}</span>
						 @endif
						 <input type="password" name="password" class="password" placeholder="password" /><br/>
						 @if($errors->has('password'))
						 	<span class="errormsg">{{ $errors->first('password')}}</span>
						 @endif


						 <input type="password" name="c_password" class="password" placeholder="retype-password" /><br/>

						@if ($errors->has('c_password')) <p class="help-block">{{ $errors->first('c_password') }}</p> @endif

						<input type="submit" value="Register" name="submit" class="rgstrbtn" />
						<a href="{{ route('index') }}"><p>Back to home</p></a>
						<img src="images/logbase.png" class="logbase">

						<input type="hidden" name="_token" value="{{ Session::token() }}">
					</form>

			</div>

</body>
</html>
