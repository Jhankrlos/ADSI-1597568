<?php
	
	$delete_id = $_GET['delete'];
	
	$delete = "DELETE FROM user_data WHERE id='$delete_id'";
	
	$ejecuting = mysqli_query($con,$delete); 
		
		if($ejecuting){
		
		echo "<script>alert('The user has been successfully deleted!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		}
	
	
	
	?>

