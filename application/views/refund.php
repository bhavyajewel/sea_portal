<!-- <h2>REFUND</h2> -->
<br><br>
<form action="<?php echo base_url();?>Welcome/refund_process" method="post">
<input type="hidden" name="hide" value="<?php echo $shipid;?>">
<input type="hidden" name="export" value="<?php echo $exportid;?>">

<center>
	<table aligh="center">
	<tr><td>Refund amount</td><td><input type="text" name="refundamount"></td></tr>
    <tr><td></td><td></td></tr>
	<tr><td></td><td><input type="submit" value="make payment" class="btn btn-success"></td></tr>
	</table>
    </center>
	</form>
<br><br>