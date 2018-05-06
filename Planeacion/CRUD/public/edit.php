<?php

if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    
    $consulting = "SELECT * FROM user_data WHERE id='$edit_id'";
    $ejecuting = mysqli_query($con, $consulting); 
			
			$file= mysqli_fetch_array($ejecuting);
			
                        $id = $file['Id'];
			$name = $file['Name']; 
			$lastname = $file['Lastname']; 
			$phone = $file['Phone'];
			
			}
?>
 
<br />

<form method="post" action="">
                <input type="number" name="id" value="<?php echo $id;?>"/><br/>
		<input type="text" name="name" value="<?php echo $name;?>"/><br/>
                <input type="text" name="lastname" value="<?php echo $lastname;?>"/><br/>
                <input type="number" name="phone" value="<?php echo $phone ;?>"/><br/>
		<input type="submit" name="update" value="Update Data"/>
</form>

<?php 
	if(isset($_POST['update'])){
	        
                $update_id = $_POST['id'];
		$update_name = $_POST['name'];
		$update_lastname = $_POST['lastname'];
		$update_phone = $_POST['phone'];
		
		$update = "UPDATE user_data SET id='$update_id', name='$update_name', lastname='$update_lastname', phone='$update_phone' WHERE id='$edit_id'";
		
		$ejecuting = mysqli_query($con, $update);
	
		if($ejecuting){
		
		echo "<script>alert('Updated data!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		}
	}
	
	?> 


