@include('header')
<div class="crudprdct">


<h1>New Stock order</h1>


<div class="order_stock">
<div class="details">
<P>Details</P>
</div>

<form action="newStockOrder" method="post" >
<p class="name/reference">Name/Reference &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="order_name" placeholder ="name to identify stock order" class="product_name"></p>

<p class="orderfrom">Order from &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="supplierid">
	@foreach($suppliers as $supplier)
	<option value='{{$supplier['id']}}'>{{$supplier['supplier_name']}}</option>
@endforeach
</select>


<p class="orderfrom">Search products &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="productid" >
	@foreach($products as $product)
	<option value='{{$product['id']}}'>{{$product['product_name']}}</option>
@endforeach
</select>
<p class="quantityoforder">Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity" placeholder ="no of quantity" ></p>

<input type="Submit" name="btnorderstock" class="btnorderstock" value="SAVE AND SEND MAIL" >


</div>
</div>










<input type="submit" name="addSuppliers" value="Add Suppliers" class="btnadd_suppliers" />

<input type="submit" name="cancel_to_add_suppliers" value="Cancel " class="cancelsuppliers" />

						<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
</div>
@include('footer')
