
<!DOCTYPE html>
<html>
<head>
	<title>ADD BRAND</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">

<body>
<div class="add_brand_div">

<h1>Add product type</h1>

<form action="types" method="post">

<p>Type name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="type_name" placeholder = "type name" class="brand_name"></p>
 @if($errors->has('brand_name'))
						 	<span class="errormsg">{{ $errors->first('brand_name')}}</span>
						 @endif

<input type="Submit" value="Brand details" name="type_details"   class="brand_details_submit">
<input type="Submit" value="Cancel" name="cancel_type_details"  class="cancel_brand_details">

<input type="hidden" name="_token" value="{{ Session::token() }}">

</form>
</div>
</body>
</html>
