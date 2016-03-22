@include('header')
<div class="crudprdct">


<h1>ADD SUPPLIERS</h1>
<a href="#" class="edtprdct">EDIT SUPPLIERS</a>
<a href="#" class="deleteprdct">DELETE SUPPLIERS</a>




<div class="details_suppliers">
<div class="details">
<P>Details</P>
</div>

<form action="suppliers" method="post" >
<p class="prdctname">Supplier name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="supplier_name" placeholder ="product name" class="product_name"></p>

 @if($errors->has('supplier_name'))
						 	<span class="errormsg">{{ $errors->first('supplier_name')}}</span>
						 @endif




<p class="supplierdescription">Supplier description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="supplier_description" class="supplier_description"></textarea>


 @if($errors->has('supplier_description'))
						 	<span class="errormsg">{{ $errors->first('supplier_description')}}</span>
						 @endif





</div>
</div>







<div class="addcontact_information">
<div class="details">
<P>Contact Information</P>
</div>

<p class="supplyprice">Company<input type="text" name="company"  class="company" ></p><br/>

 @if($errors->has('company'))
						 	<span class="errormsg">{{ $errors->first('company')}}</span>
						 @endif




<p class="supplier_web">Website<input type="text" name="website"  class="website" ></p><br/><br/>
 @if($errors->has('website'))
						 	<span class="errormsg">{{ $errors->first('website')}}</span>
						 @endif






<p class="supplier_eml">Email<input type="email" name="supplier_email"  class="supplier_email" ></p><br/><br/>
 @if($errors->has('supplier_email'))
						 	<span class="errormsg">{{ $errors->first('supplier_email')}}</span>
						 @endif



<p class="supplier_cntct_name">Contact name<input type="text" name="supplier_contact_fname" placeholder="First name" class="scf"> &nbsp;&nbsp;&nbsp;<input type="text" name="supplier_contact_lname"  class="scl" placeholder = "last name"></p><br/><br/>

 @if($errors->has('supplier_contact_fname'))
						 	<span class="errormsg">{{ $errors->first('supplier_contact_fname')}}</span>
						 @endif

 @if($errors->has('supplier_contact_lname'))
						 	<span class="errormsg">{{ $errors->first('supplier_contact_lname')}}</span>
						 @endif


<p class="supplier_ph">Phone<input type="text" name="supplier_phone"  class="supplier_phone" ></p><br/><br/>
 @if($errors->has('supplier_phone'))
						 	<span class="errormsg">{{ $errors->first('supplier_phone')}}</span>
						 @endif



<p class="supplier_mbl">Mobile<input type="text" name="supplier_mobile"  class="supplier_mobile" ></p>

 @if($errors->has('supplier_mobile'))
						 	<span class="errormsg">{{ $errors->first('supplier_mobile')}}</span>
						 @endif



</div>
</div>




<div class="add_address">
<div class="details">
<P>Address</P>
</div>


<P class="atrbt">Country <select name="supplier_country"class="attribute" >

<option>---COUNTRY---</option>
<option>Afghanistan</option>
<option>Albania</option>
<option>Algeria</option>
<option>American Samoa</option>
<option>Andorra</option>
<option>Angola</option>
<option>Anguilla</option>
<option>Antarctica</option>
<option>Antigua and Barbuda</option>
<option>Argentina</option>
<option>Armenia</option>
<option>Aruba</option>
<option>Australia</option>
<option>Austria</option>
<option>Azerbaijan</option>
<option>Bahamas</option>
<option>Bahrain</option>
<option>Bangladesh</option>
<option>Barbados</option>
<option>Belarus</option>
<option>Belgium</option>
<option>Belize</option>
<option>Benin</option>
<option>Bermuda</option>
<option>Bhutan</option>
<option>Bolivia</option>
<option>Bosnia and Herzegovina</option>
<option>Botswana</option>
<option>Bouvet Island</option>
<option>Brazil</option>
<option>British Indian Ocean Territory</option>
<option>Brunei Darussalam</option>
<option>Bulgaria</option>
<option>Burkina Faso</option>
<option>Burundi</option>
<option>Cambodia</option>
<option>Cameroon</option>
<option>Canada</option>
<option>Cape Verde</option>
<option>Cayman Islands</option>
<option>Central African Republic</option>
<option>Chad</option>
<option>Chile</option>
<option>China</option>
<option>Christmas Island</option>
<option>Cocos Islands</option>
<option>Colombia</option>
<option>Comoros</option>
<option>Congo</option>
<option>Congo, Democratic Republic of the</option>
<option>Cook Islands</option>
<option>Costa Rica</option>
<option>Cote d'Ivoire</option>
<option>Croatia</option>
<option>Cuba</option>
<option>Cyprus</option>
<option>Czech Republic</option>
<option>Denmark</option>
<option>Djibouti</option>
<option>Dominica</option>
<option>Dominican Republic</option>
<option>Ecuador</option>
<option>Egypt</option>
<option>El Salvador</option>
<option>Equatorial Guinea</option>
<option>Eritrea</option>
<option>Estonia</option>
<option>Ethiopia</option>
<option>Falkland Islands</option>
<option>Faroe Islands</option>
<option>Fiji</option>
<option>Finland</option>
<option>France</option>
<option>French Guiana</option>
<option>French Polynesia</option>
<option>Gabon</option>
<option>Gambia</option>
<option>Georgia</option>
<option>Germany</option>
<option>Ghana</option>
<option>Gibraltar</option>
<option>Greece</option>
<option>Greenland</option>
<option>Grenada</option>
<option>Guadeloupe</option>
<option>Guam</option>
<option>Guatemala</option>
<option>Guinea</option>
<option>Guinea-Bissau</option>
<option>Guyana</option>
<option>Haiti</option>
<option>Heard Island and McDonald Islands</option>
<option>Honduras</option>
<option>Hong Kong</option>
<option>Hungary</option>
<option>Iceland</option>
<option>India</option>
<option>Indonesia</option>
<option>Iran</option>
<option>Iraq</option>
<option>Ireland</option>
<option>Israel</option>
<option>Italy</option>
<option>Jamaica</option>
<option>Japan</option>
<option>Jordan</option>
<option>Kazakhstan</option>
<option>Kenya</option>
<option>Kiribati</option>
<option>Kuwait</option>
<option>Kyrgyzstan</option>
<option>Laos</option>
<option>Latvia</option>
<option>Lebanon</option>
<option>Lesotho</option>
<option>Liberia</option>
<option>Libya</option>
<option>Liechtenstein</option>
<option>Lithuania</option>
<option>Luxembourg</option>
<option>Macao</option>
<option>Madagascar</option>
<option>Malawi</option>
<option>Malaysia</option>
<option>Maldives</option>
<option>Mali</option>
<option>Malta</option>
<option>Marshall Islands</option>
<option>Martinique</option>
<option>Mauritania</option>
<option>Mauritius</option>
<option>Mayotte</option>
<option>Mexico</option>
<option>Micronesia</option>
<option>Moldova</option>
<option>Monaco</option>
<option>Mongolia</option>
<option>Montenegro</option>
<option>Montserrat</option>
<option>Morocco</option>
<option>Mozambique</option>
<option>Myanmar</option>
<option>Namibia</option>
<option>Nauru</option>
<option>Nepal</option>
<option>Netherlands</option>
<option>Netherlands Antilles</option>
<option>New Caledonia</option>
<option>New Zealand</option>
<option>Nicaragua</option>
<option>Niger</option>
<option>Nigeria</option>
<option>Norfolk Island</option>
<option>North Korea</option>
<option>Norway</option>
<option>Oman</option>
<option>Pakistan</option>
<option>Palau</option>
<option>Palestinian Territory</option>
<option>Panama</option>
<option>Papua New Guinea</option>
<option>Paraguay</option>
<option>Peru</option>
<option>Philippines</option>
<option>Pitcairn</option>
<option>Poland</option>
<option>Portugal</option>
<option>Puerto Rico</option>
<option>Qatar</option>
<option>Romania</option>
<option>Russian Federation</option>
<option>Rwanda</option>
<option>Saint Helena</option>
<option>Saint Kitts and Nevis</option>
<option>Saint Lucia</option>
<option>Saint Pierre and Miquelon</option>
<option>Saint Vincent and the Grenadines</option>
<option>Samoa</option>
<option>San Marino</option>
<option>Sao Tome and Principe</option>
<option>Saudi Arabia</option>
<option>Senegal</option>
<option>Serbia</option>
<option>Seychelles</option>
<option>Sierra Leone</option>
<option>Singapore</option>
<option>Slovakia</option>
<option>Slovenia</option>
<option>Solomon Islands</option>
<option>Somalia</option>
<option>South Africa</option>
<option>South Georgia</option>
<option>South Korea</option>
<option>Spain</option>
<option>Sri Lanka</option>
<option>Sudan</option>
<option>Suriname</option>
<option>Svalbard and Jan Mayen</option>
<option>Swaziland</option>
<option>Sweden</option>
<option>Switzerland</option>
<option>Syrian Arab Republic</option>
<option>Taiwan</option>
<option>Tajikistan</option>
<option>Tanzania</option>
<option>Thailand</option>
<option>The Former Yugoslav Republic of Macedonia</option>
<option>Timor-Leste</option>
<option>Togo</option>
<option>Tokelau</option>
<option>Tonga</option>
<option>Trinidad and Tobago</option>
<option>Tunisia</option>
<option>Turkey</option>
<option>Turkmenistan</option>
<option>Tuvalu</option>
<option>Uganda</option>
<option>Ukraine</option>
<option>United Arab Emirates</option>
<option>United Kingdom</option>
<option>United States</option>
<option>United States Minor Outlying Islands</option>
<option>Uruguay</option>
<option>Uzbekistan</option>
<option>Vanuatu</option>
<option>Vatican City</option>
<option>Venezuela</option>
<option>Vietnam</option>
<option>Virgin Islands, British</option>
<option>Virgin Islands, U.S.</option>
<option>Wallis and Futuna</option>
<option>Western Sahara</option>
<option>Yemen</option>
<option>Zambia</option>
<option>Zimbabwe</option>


</select></P>

 @if($errors->has('supplier_country'))
						 	<span class="errormsg">{{ $errors->first('supplier_country')}}</span>
						 @endif


<p class="city">City<input type="text" name="city" placeholder = "city" class="city" ></p>

 @if($errors->has('city'))
						 	<span class="errormsg">{{ $errors->first('city')}}</span>
						 @endif

<p class="state">State<input type="text" name="state"  class="state" ></p>
 @if($errors->has('state'))
						 	<span class="errormsg">{{ $errors->first('state')}}</span>
						 @endif


<p class="postal_code">Postal code<input type="text" name="postalcode"  class="postalcode" ></p>
 @if($errors->has('postalcode'))
						 	<span class="errormsg">{{ $errors->first('postalcode')}}</span>
						 @endif

<p class="street">Street<input type="text" name="street"  class="strt" ></p>
 @if($errors->has('street'))
						 	<span class="errormsg">{{ $errors->first('street')}}</span>
						 @endif


</div>
</div>



</div>



<input type="submit" name="addSuppliers" value="Add Suppliers" class="btnadd_suppliers" />

<input type="submit" name="cancel_to_add_suppliers" value="Cancel " class="cancelsuppliers" />

						<input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
</div>
@include('footer')
