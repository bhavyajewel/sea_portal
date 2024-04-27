<h2></h2>
<form action="<?php echo base_url();?>Welcome/tenderapplynow1" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="<?php echo $tid;?>">
    <tr><td>Amount</td><td><input type="text" name="amount"></td></tr><br>
	<tr><td></td><td><input type="submit" value="apply" class="btn btn-success"></td></tr>
	</table>
	</form>