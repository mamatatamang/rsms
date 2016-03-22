@include('header')
<div class="crudprdct">


<h1>ADD PRODUCTS</h1>
<a href="#" class="edtprdct">EDIT PRODUCT</a>
<a href="#" class="deleteprdct">DELETE PRODUCT</a>




<div class="semicrud">
<div class="details">
<P>Details</P>
</div>

<form action="products" method="post" >
<p class="prdctname">Product name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="product_name" placeholder ="product name" class="product_name"></p>

<P class="prdcttype">Product Type  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="typeid"class="product_type"  >
	@foreach($types as $type)
		<option value='{{$type['id'] }}'>{{ $type['type_name'] }}</option>
	@endforeach

</select></P>



<P class="prdctbrand" >Product Brand  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="brandid" class="product_brand" >


	@foreach ($brands as $brand)
		<option value='{{$brand['id'] }}'>{{ $brand['brand_name'] }}</option>
	@endforeach




</select></P>

<!--<p class="scode">Supplier code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="supplier_code" placeholder ="supplier code" class="supplier_code"></p>
-->

<P class = "ssplier">Supplier  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="supplierid" class="supplier" value="supplierid">
@foreach($suppliers as $supplier)
<option value='{{$supplier['id']}}'>{{$supplier['supplier_name']}}</option>
@endforeach



</select></P>




</div>
</div>







<div class="addpricing">
<div class="details">
<P>Pricing</P>
</div>

<p class="supplyprice">Supply price<br/><br/><input type="text" name="supply_price"  class="sp" ></p>

<p class="retailprice_exc_tax">Retail price(exc tax)<br/><br/><input type="text" name="price_exc_tax"  class="ret" ></p>
<p class="salestax">Sales tax <br/><br/><input type="text" name="sales_tax"  class="st" ></p>
<p class="retailprice_inc_tax">Retail price(inc tax)<br/><br/><input type="text" name="price_inc_tax"  class="rit"></p>

</div>
</div>




<div class="variation">
<div class="details">
<P>Varients</P>
</div>


<P class="atrbt">Attribute(e.g size)  <br/><select name="varient_attribute"class="attribute"  value="varient_attribute">
	<option value="size" >size</option>

	<option value="color">color</option>


</select></P>

<P class="dfltvalue">Default value(e.g small)  <br/><select name="varient_default_value"class="attribute" value="varient_default_value">
	<option value="small" >small</option>

	<option value="medium">medium</option>


	<option value="large">large</option>

</select></P>

</div>
</div>





<div class="inventory">
<div class="details">
<P>Inventory</P>
</div>

<p class="barcode">Stock keeping unit<br/><br/><input type="text" name="barcode" placeholder = "barcode" class="barcodecss" ></p>
<p class="current_stock">Current Stock<br/><br/><input type="text" name="current_stock"  class="barcodecss" ></p>

</div>



</div>



<input type="submit" name="addproducts" value="Add product" class="btnadd_product" />

<input type="submit" name="cancel_to_add" value="Cancel " class="cancelprdct" />

						<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
</div>
@include('footer')
