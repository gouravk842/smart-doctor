<!DOCTYPE html>
<html>

<head>
    <title>Smart Doctor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="#">Smart Doctor</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navb" class="navbar-collapse collapse hide">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><span class="fas fa-sign-in-alt"></span> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php

include 'connectToDatabase.php';

$query = "SELECT * FROM patient";

$result = mysqli_query($conn,$query);

$sNo=0;

if(mysqli_num_rows($result)>0)
{
    echo "<table class='table table-striped'> <thead> <tr> <th scope='col'> S.No. </th> <th scope='col'>Name</th> <th scope='col'>Sex</th> <th scope='col'>Age</th> <th scope='col'>Address</th>  </tr> </thead>";
  echo "<tbody> ";
    while($row=mysqli_fetch_array($result))
  {
    $sNo++;
    echo "<tr>";
    echo "<th scope='row'>".$sNo."</th>";
    echo "<td>".$row['fullName']."</td>";
    echo "<td>".$row['sex']."</td>";
    echo "<td>".$row['age']."</td>";
    echo "<td>".$row['address']."</td>";    
  }
  echo "</tbody> </table>";
}


?>

    <footer class="foot">
        <p>Thank You...</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>