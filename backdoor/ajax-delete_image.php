<?php
	$con = Barrel_Wallboard_Api::get_db_con();

	$id = $_REQUEST['id'];
	$image_url = $_REQUEST['image_url'];
	$options_query = "DELETE FROM photos WHERE id='$id'";
	mysqli_query($con, $options_query);
	mysqli_close($con);
	
	unlink('../uploads/'.$image_url);
?>