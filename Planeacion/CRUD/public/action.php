<?php

    $id= $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    
    $sending = "INSERT INTO user_data(Id,Name,Lastname,Phone) values('$id','$name','$lastname','$phone')";
    
    $ejecuting = (string) mysqli_query($con,$sending);
    
    if($ejecuting){
        echo '<h3>Inserted correctly</h3>';
    }
    