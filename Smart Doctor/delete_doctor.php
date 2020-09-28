<?php

include 'connectToDatabase.php';

$name = $_POST['name'];

$emailquery=" delete from doctor where fullName = '$name' ";

$query=mysqli_query($conn,$emailquery);

if($query){
    echo "Data deleted successfully";
}
else
{
    echo "error";
}
?>