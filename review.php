<?php
include("connection.php");


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



$sql = "INSERT INTO review ( name , email , message)
         VALUES ( '$name' , '$email' , '$message');";


if (mysqli_multi_query($conn, $sql)) {
  
    echo "send message successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>