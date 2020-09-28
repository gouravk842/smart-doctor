<?php

include 'connectToDatabase.php';

$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];

$insertquery = " INSERT INTO help (name,email,message) 
    VALUES ('$name','$email','$message') ";

$iquery=mysqli_query($conn,$insertquery);

header('location:patient.php');

?>