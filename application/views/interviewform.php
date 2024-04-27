<h2>INTERVIEW FORM</h2>
<form action="<?php echo base_url();?>Welcome/interview" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="">
    <tr><td>Interview date</td><td><input type="date" name="interview_date"></td></tr>
    <tr><td>Interview time</td><td><input type="time" name="time"></td></tr>
    <tr><td>Venue</td><td><input type="text" name="venue"></td></tr>
    <!-- <tr><td>Current date</td><td><input type="text" name="currentdate"></td></tr> -->
    <tr><td>Upload CV</td><td><input type="file" name="image"></td></tr>
	<tr><td></td><td><input type="submit" value="register" class="btn btn-success"></td></tr>
	</table>
	</form>