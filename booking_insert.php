<?php
include("connection.php");


$date = $_POST['date'];
$Drop_OF = $_POST['Drop_OF'];
$time = $_POST['time'];
$time2 = $_POST['time2'];
$price = $_POST['price'];
$text = $_POST['text'];


$sql = "INSERT INTO booking ( date , Drop_OF , time, time2 , price , text )
         VALUES ( '$date' , '$Drop_OF' , '$time' , '$time2' , '$price' , '$text' );";


if (mysqli_multi_query($conn, $sql)) {
  
     header("location: successful_ bookingn2.html");
     exit;
    echo "good day";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>