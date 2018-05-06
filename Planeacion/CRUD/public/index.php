<!DOCTYPE html>
<?php
$con = mysqli_connect('localhost', 'root', '', 'user_data') or die ('Error');
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <title>Data Table</title>
    </head>
    <body>
        <h2>Please, insert your data</h2>
        <div class="form">
        <form method="POST" action="index.php">
            <label>Id:</label>
            <input type="number" name="id" placeholder="Enter your id number"><br />
            <label>Name:</label>
            <input type="text" name="name" placeholder="Enter your name"><br />
            <label>Lastname:</label>
            <input type="text" name="lastname" placeholder="Enter your lastname"><br />
            <label>Phone:</label>
            <input type="number" name="phone" placeholder="Enter your phone number"><br />
            <input type="submit" name="send" value="Send">
        </form>
        
        <?php


if(isset($_POST['send'])){
 include ('action.php');
}
?>
  </div>       
<br />

<div class="table">
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>


<?php
 $consulting = "SELECT * FROM user_data";
 
 $ejecuting = mysqli_query($con, $consulting);
 
 $i = 0;
 
 while($file = mysqli_fetch_array($ejecuting)){
     $id = $file['Id'];
     $name = $file['Name'];
     $lastname = $file['Lastname'];
     $phone = $file['Phone'];
     
     $i++;
 
 ?>


    <tr align="center">
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
	<td><?php echo $lastname; ?></td>
	<td><?php echo $phone; ?></td>
        <td><a href="index.php?edit=<?php echo $id; ?>">Edit</a></td>
        <td><a href="index.php?delete=<?php echo $id; ?>">Delete</a></td>
    </tr>

<?php } ?>

</table>

<?php 
   if(isset($_GET['edit'])){
       include('edit.php'); 
   }
?>

<?php 
	if(isset($_GET['delete'])){
        include ('delete.php');
        }
        ?>

 </div>
</body>
</html>


