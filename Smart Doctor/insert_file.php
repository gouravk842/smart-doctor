<?php
session_start();
?>

<?php

include 'connectToDatabase.php';

$link=$_GET['link']."&token=".$_GET['token'];

$user=$_GET['user'];

$sql = "UPDATE patient SET report='$link' WHERE email='$user' ";

$iquery=mysqli_query($conn,$sql);

if($iquery)
{

?>
    <script>
            alert("File uploaded successfully...");
    </script>
<?php
}

?>