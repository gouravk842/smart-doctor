<?php

include 'connectToDatabase.php';

$fullName=$_GET['fullName'];
$email=$_GET['email'];
$sex=$_GET['sex'];
$age=$_GET['age'];
$address=$_GET['address'];
$link=$_GET['link'];
$token=$_GET['token'];
$fresh_link=$_GET['link']."&token=".$_GET['token'];

$emailquery=" select * from patient where email = '$email' ";

$query=mysqli_query($con,$emailquery);

$emailcount=mysqli_num_rows($query);

if($emailcount>0)
{
    ?>
        <script>
            alert("Already registered..");
        </script>
    <?php
}
else
{
    $insertquery = " INSERT INTO patient (fullName,email,sex,age,address,report) 
    VALUES ('$fullName','$email','$sex','$age','$address','$fresh_link') ";

    $iquery=mysqli_query($conn,$insertquery);

    ?>
        <script>
            alert("Patient data added");
        </script>
    <?php
    $_SESSION['username']=$email;
    header('location:showpatient.php');
    
}

?>