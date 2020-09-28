<?php

$server="192.168.43.179:3306";
$user="root";
$password="Gourav@123";
$database="smartdoctor";

$conn=mysqli_connect($server,$user,$password,$database);

if(!$conn)
{
    ?>
        <script>

            alert("No Connection. Try again later..");
        </script>
    <?php
}


?>