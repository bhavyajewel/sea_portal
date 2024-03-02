<h2>CONTRACT REGISTRATION FORM</h2>
<form action="<?php echo base_url();?>index.php/Welcome/contractregister" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="h">
	<tr><td>Contractname</td><td><input type="text" name="name"></td></tr>
    <tr><td>regid</td><td><input type="text" name="regid"></td></tr>
    <tr><td>Age</td><td><input type="text" name="age"></td></tr>
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