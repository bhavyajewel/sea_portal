<h2>SHIP EDIT FORM</h2>
<form action="<?php echo base_url();?>Welcome/exportupdation" method="post">
	<table aligh="center">
    <input type="hidden" name="hide" value="<?php echo $id?>">
	<?php foreach ($dis as $row) { ?>
    <tr><td>Ship Category</td><td><select name="shipcategory">
	<option Value="<?php echo $row->shipcategory;?>"><?php echo $row->shipcategory;?></option>
    <option>Selelct</option>
		<option>Cargo Carriers</option>
		<option>Passenger Carriers</option>
		<option>Industrial Ships</option>
		<option>Service Vessels</option>
		<option>Non commercial</option>
		<option>Ferries</option>
		<option>Tankers</option>
		<option>Container ships</option>
		<option>Barge-carrying ships</option>
		<option>Dry bulk ships</option>
		<option>Roll-on ships</option>
		<option>Roll-off ships</option>
		<option>Cruise ships</option>
		<option>General ships</option>
	</select></tr>
    <tr><td>Ship Name</td><td><input type="text" name="shipname" value="<?php echo $row->shipname;?>">></td></tr>
	<tr><td>Source</td><td><input type="text" name="source" value="<?php echo $row->source;?>"></td></tr>
	<tr><td>Destination</td><td><input type="text" name="destination" value="<?php echo $row->destination;?>"></td></tr>
    <tr><td>Ship Details</td><td><textarea  name="shipdetails"><?php echo $row->shipdetails;?></textarea></td></tr>
	<tr><td></td><td><input type="submit" value="update" class="btn btn-success"></td></tr>
    <?php } ?>
	</table>
	</form>