


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POS</title>
<link type = "text/css" rel="stylesheet" href = "style.css"/>


</head>

<body>
<div class="posbackground">
<div class="paydiv">
	<br/><br/><br/><a href="#">Current sale</a><br/><br/><br/>

<a href="saleshistory">Sales history</a>
</div>
<div class="srchprodctdiv">
<p>Search for products</p>
	<form action="" method="POST">


 <input type="text" class="prdctsrch" name="prdctsrch" placeholder="search product"/ >

</form>


</div>
<div class="payprodctdiv">
	<h1>CHECKOUT</h1>
<a href="discardsale"> Discard sale </a>
<div class="dropdown">
 <input type="text" name="getselectedprdct" class="getselectedprdct" placeholder="selected product">
  <div class="dropdown-content">
  <div class="drpdwnform">
    <form action="" method="POST">

<h4>Quantity</h4>
 <input type="text" class="qntity" name="qntity" placeholder="quantity"/ > &nbsp;&nbsp;&nbsp;&nbsp;
 <div class="prices">
<h4>Price</h4>
<input type="text" class="price" name="price" placeholder="price"/ >&nbsp;&nbsp;&nbsp;&nbsp;</div>
 <div class="discounts">
<h4>Discount</h4>
<input type="text" class="dscnt" name="dscnt" placeholder="discount"/ >

 </div>
 <br/><br/>


    </div>


  </div>
</div>
<input type="text" name="notetosale" class="note" placeholder="Add a short note to this sell"/>
<p class="subtotal">Sub Total</p>
<p class="tax">TAX</p>
<p class="total">Total</p>
<br/><br/>

<a href="reciept" class="button">PAY</a>
</form>

</div>

</div>



</div>
</body>
</html>
