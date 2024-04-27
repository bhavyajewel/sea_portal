<h2>EXPORT DETAILS FORM</h2>
<form action="<?php echo base_url();?>Welcome/jobdetails" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="">
    <tr><td>Product Name</td><td><input type="text" name="productname"></td></tr>
    <tr><td>Product Quantity</td><td><input type="text" name="productquantity"></td></tr>
    <tr><td>Source</td><td><input type="text" name="source"></td></tr>
    <tr><td>Destination</td><td><input type="text" name="destination"></td></tr>
    <tr><td>Date</td><td><input type="date" name="date"></td></tr>
    <tr><td>Recepient Name</td><td><input type="text" name="recepientname"></td></tr>
    <tr><td>Recepient Address</td><td><input type="text" name="recepientaddress"></td></tr>
    <tr><td>Recepient Contact</td><td><input type="text" name="recepientcontact"></td></tr>
	<tr><td></td><td><input type="submit" value="register" class="btn btn-success"></td></tr>
	</table>
	</form>