<h2>NEWS UPDATION FORM</h2>
<form action="<?php echo base_url();?>/Welcome/newsupdation" method="post">
	<table aligh="center">
	<input type="hidden" name="hide" value="<?php echo $id?>">
    <?php foreach ($views as $row) { ?>
	<tr><td>News</td><td><textarea  name="news"><?php echo $row->news;?></textarea></td></tr>
	<!-- <tr><td>Date</td><td><input type="date" name="date" value="<?php echo $row->currentdate;?>"></td></tr> -->
	<tr><td></td><td><input type="submit" value="Update" class="btn btn-success"></td></tr>
    <?php } ?>
	</table>
	</form>	