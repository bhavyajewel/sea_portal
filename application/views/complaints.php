<br><br>
<centre>
<form action="<?php echo base_url();?>Welcome/complaint" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="<?php echo $shipid;?>">
	<input type="hidden" name="exportid" value="<?php echo $exportid;?>">
    <tr><td>Subject</td><td><input type="text" name="subject"></td></tr>
	<tr><td>Complaint</td><td><textarea name="complaints"></textarea></td></tr>
    <tr><td>Upload image</td><td><input type="file" name="image"></td></tr>
	<tr><td></td><td><input type="submit" value="register" class="btn btn-success"></td></tr>
	</table>
	</form>
	</centre>
<br><br>