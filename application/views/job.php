<h2>JOBS FORM</h2>
<form action="<?php echo base_url();?>Welcome/jobdetails" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="">
    <tr><td>Job Category</td><td><select name="jobcategory">
		<option>Selelct</option>
		<option>Captain</option>
		<option>Marine Engineer</option>
		<option>Deckhand</option>
		<option>Engineer</option>
        <option>Cruise Staff Department</option>
		<option>Activities Coordinator</option>
		<option>Chief Engineer</option>
		<option>Chief Mate</option>
		<option>Logistics</option>
		<option>Officer</option>
		<option>Chef</option>
		<option>Mechanics</option>
		<option>Entertainment and guest programmes</option>
		<option>Crane drivers</option>
		<option>Terminal Operators</option>
        <option>Cleaning</option>
        <option>HR Post</option>
        <option>IT engineers</option>
	</select></tr>
    <tr><td>Job Name</td><td><input type="text" name="jobname"></td></tr>
    <tr><td>Job details</td><td><input type="text" name="jobdetails"></td></tr>
    <tr><td>Qualifications</td><td><select name="qualification">
		<option>Selelct</option>
		<option>Tenth Passed</option>
		<option>+2 pass </option>
		<option>Degree</option>
		<option>Engineering</option>
        <option>Diploma</option>
		<option>others</option>
	</select></tr>
    <tr><td>last date for apply</td><td><input type="date" name="lastdateforapply"></td></tr>
	<tr><td></td><td><input type="submit" value="register" class="btn btn-success"></td></tr>
	</table>
	</form>