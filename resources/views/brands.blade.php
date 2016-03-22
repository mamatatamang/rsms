
<!DOCTYPE html>
<html>
<head>
	<title>ADD BRAND</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">

<body>
<div class="add_brand_div">

<h1>Add new brand</h1>

<form action="brands" method="post">

<p>Brand name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="brand_name" placeholder = "Brand name" class="brand_name"></p>
 @if($errors->has('brand_name'))
						 	<span class="errormsg">{{ $errors->first('brand_name')}}</span>
						 @endif

<P>Brand description&nbsp;&nbsp;&nbsp;<textarea name="brand_description" class="brand_description" ></textarea></P>

<input type="Submit" value="Brand details" name="brand_details"   class="brand_details_submit">
<input type="Submit" value="Cancel" name="cancel_brand_details"  class="cancel_brand_details">


						<input type="hidden" name="_token" value="{{ Session::token() }}">

</form>
</div>
</body>
</html>
