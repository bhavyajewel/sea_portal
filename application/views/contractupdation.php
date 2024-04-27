<h2>CONTRACT UPDATION FORM</h2>
<form action="<?php echo base_url();?>Welcome/contractupdation" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="<?php echo $id?>">
	<?php foreach ($views as $row) { ?>
	<tr><td>Contractname</td><td><input type="text" name="name" value="<?php echo $row->name;?>"></td></tr>
    <tr><td>regid</td><td><input type="text" name="regid" value="<?php echo $row->regid;?>"></td></tr>
    <tr><td>Age</td><td><input type="text" name="age" value="<?php echo $row->age;?>"></td></tr>
    <tr><td>Gender</td><td><select id="gender" name="gender" required><br><br>
		<!-- <option Value="<?php echo $row->state;?>"><?php echo $row->state;?></option> -->
		<option value="male">Male</option>
		<option value="female">Female</option>
		<option value="other">Other</option>
    </select>
	</td></tr>
    <tr><td>contact</td><td><input type="text" name="contact" value="<?php echo $row->contact;?>"></td></tr>
	<tr><td>email</td><td><input type="email" name="email" value="<?php echo $row->email;?>"></td></tr>
	<!-- <tr><td>password</td><td><input type="password" name="password"></td></tr> -->
	<tr><td></td><td><input type="submit" value="update" class="btn btn-success"></td></tr>
	<?php } ?>
	</table>
	</form>