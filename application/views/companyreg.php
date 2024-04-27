<h2>COMPANY REGISTRATION FORM</h2>
<form action="<?php echo base_url();?>Welcome/companyregister" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="h">
	<tr><td>Name</td><td><input type="text" name="name"></td></tr>
	<tr><td>Adress</td><td><textarea  name="address"></textarea></td></tr>
	<tr><td>State</td><td><select name="state">
    <option>Selelct</option>
		<option>ANDHRA PRADESH</option>
		<option>ARUNACHAL PRADESH</option>
		<option>BIHAR</option>
		<option>CHATTISGARH</option>
		<option>GOA</option>
		<option>GUJARAT</option>
		<option>HARYANA</option>
		<option>JHARKHAND</option>
		<option>KARNATAKA</option>
		<option>KERALA</option>
		<option>MADHYA PRADESH</option>
		<option>PUNJAB</option>
		<option>TAMILNADU</option>
		<option>WEST BENGAL</option>
		</td></tr>
	<tr><td>District</td><td><select name="district">
		<option>Selelct</option>
		<option>Thiruvananthapuram</option>
		<option>Kollam</option>
		<option>Pathanamthitta</option>
		<option>Alappuzha</option>
		<option>Kottayam</option>
		<option>Idukki</option>
		<option>Ernakulam</option>
		<option>Trissufr</option>
		<option>Palakad</option>
		<option>Malapuram</option>
		<option>Kozhikode</option>
		<option>Wayanad</option>
		<option>Kannur</option>
		<option>Kasargode</option>
	</select></tr>
    <tr><td>contact</td><td><input type="text" name="contact"></td></tr>
	<tr><td>email</td><td><input type="email" name="email"></td></tr>
	<tr><td>password</td><td><input type="password" name="password"></td></tr>
	<tr><td></td><td><input type="submit" value="register" class="btn btn-success"></td></tr>
	</table>
	</form>