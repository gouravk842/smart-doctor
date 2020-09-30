<?php

include 'connectToDatabase.php';

$fullName=$_GET['fullName'];
$email=$_GET['email'];
$password=$_GET['password'];
$sex=$_GET['sex'];
$age=$_GET['age'];
$address=$_GET['address'];

$emailquery=" select * from patient where email = '$email' ";

$query=mysqli_query($conn,$emailquery);

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
    $insertquery = " INSERT INTO patient (fullName,email,password,sex,age,address) 
    VALUES ('$fullName','$email','$password','$sex','$age','$address') ";

    $iquery=mysqli_query($conn,$insertquery);

    ?>
        <script>
            alert("Patient data added");
        </script>
    <?php
    $_SESSION['username']=$email;
    ?>
    <script>
        var link =  "<?php echo $fresh_link ?>";
        
    </script>
    <?php
    header('location:login.php');
    
}

?>