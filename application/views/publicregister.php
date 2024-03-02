<h2>PUBLIC REGISTRATION FORM</h2>
<form action="<?php echo base_url();?>index.php/Welcome/publicregister" method="post">
	<table aligh="center">
	<tr><td>Name</td><td><input type="text" name="name"></td></tr>
	<tr><td>Adress</td><td><textarea  name="address"></textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode"></td></tr>
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
	<tr><td>City</td><td><input type="text" name="city"></td></tr>
	<tr><td>Gender</td><td><select id="gender" name="gender" required><br><br>
		<option value="male">Male</option>
		<option value="female">Female</option>
		<option value="other">Other</option>
    </select>
	</td></tr>
	<tr><td>contact</td><td><input type="text" name="contact"></td></tr>
	<tr><td>email</td><td><input type="email" name="email"></td></tr>
	<tr><td>password</td><td><input type="password" name="password"></td></tr>
	<tr><td></td><td><input type="submit" value="register" class="btn btn-success"></td></tr>
	</table>
	</form>



<!-- </div> -->