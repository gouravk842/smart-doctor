<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="index.html">Smart Doctor</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navb" class="navbar-collapse collapse hide">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.html">Home</a>
                </li>
            </ul>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><span class="fas fa-sign-in-alt"></span> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <hr>

    <div class="text">
        <p>
            <h3>Doctor List</h3>
        </p>
    </div>

    <?php

include 'connectToDatabase.php';

$query = "SELECT * FROM doctor";

$result = mysqli_query($conn,$query);

$sNo=0;

if(mysqli_num_rows($result)>0)
{
    echo "<table class='table table-striped'> <thead> <tr> <th scope='col'> S.No. </th> <th scope='col'>Name</th> <th scope='col'>Email</th> <th scope='col'>Specialist</th> <th scope='col'>Address</th>  </tr> </thead>";
  echo "<tbody> ";
    while($row=mysqli_fetch_array($result))
  {
    $sNo++;
    echo "<tr>";
    echo "<th scope='row'>".$sNo."</th>";
    echo "<td>".$row['fullName']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['specialist']."</td>";
    echo "<td>".$row['address']."</td>";
    
    
  }
  echo "</tbody> </table>";
}


?>

<div class="container">

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Doctor</button>

                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            
                                            <h4 class="modal-title">Add Doctor</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                        <input type="text" class="form-control" placeholder="Enter name" name="fullName" >
                                        <br>
                                        <input type="text" class="form-control" placeholder="Enter email" name="email">
                                        <br>
                                        <input type="password" class="form-control" placeholder="Enter password" name="password" >
                                        <br>
                                        <input type="text" class="form-control" placeholder="Enter specialist" name="specialist">
                                        <br>
                                        <input type="text" class="form-control" placeholder="Enter address" name="address">
                                        <br>
                                        <input type="submit" name="add_doctor" value="Add" class="btn btn-success">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </form>
                                        <?php

                                            if(isset($_POST['add_doctor']))
                                            {
                                                 include 'connectToDatabase.php';

                                                $fullName=$_POST['fullName'];
                                                $email=$_POST['email'];
                                                $password=$_POST['password'];
                                                $specialist=$_POST['specialist'];
                                                $address=$_POST['address'];

                                                $emailquery=" select * from doctor where email = '$email' ";

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
                                                    $insertquery = " INSERT INTO doctor (fullName,email,password,specialist,address) 
                                                        VALUES ('$fullName','$email','$password','$specialist','$address') ";

                                                    $iquery=mysqli_query($conn,$insertquery);

                                                ?>
                                                <script>
                                                    alert("Doctor data added");
                                                </script>
                                                <?php
    
                                                header('location:admin_login.php');
    
                                                }


                                            }

                                        ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
</div>

<hr>

<div class="text">
        <p>
            <h3>Appointment List</h3>
        </p>
</div>

<?php

include 'connectToDatabase.php';

$query = "SELECT * FROM appointment";

$result = mysqli_query($conn,$query);

$sNo=0;

if(mysqli_num_rows($result)>0)
{
    echo "<table class='table table-striped'> <thead> <tr> <th scope='col'> S.No. </th> <th scope='col'>Name</th> <th scope='col'>Email</th> <th scope='col'>Day</th> <th scope='col'>Time</th> <th scope='col'>Doctor Name</th> <th scope='col'>Message</th>  </tr> </thead>";
  echo "<tbody> ";
    while($row=mysqli_fetch_array($result))
  {
    $sNo++;
    echo "<tr>";
    echo "<th scope='row'>".$sNo."</th>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['day']."</td>";
    echo "<td>".$row['time']."</td>";
    echo "<td>".$row['doctorName']."</td>";
    echo "<td>".$row['message']."</td>";
  }
  echo "</tbody> </table>";
}


?>

<hr>

<div class="text">
        <p>
            <h3>Patient List</h3>
        </p>
    </div>

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

<div class="container">

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Add Patient</button>

                            <div class="modal fade" id="myModal1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            
                                            <h4 class="modal-title">Add Patient</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                        <input type="text" class="form-control" placeholder="Enter name" name="fullName" >
                                        <br>
                                        <input type="text" class="form-control" placeholder="Enter email" name="email">
                                        <br>
                                        <input type="password" class="form-control" placeholder="Enter password" name="password" >
                                        <br>
                                        <select class="form-control" name="sex" id="sex">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Others</option>
                                        </select>
                                        <br>
                                        <input class="form-control" type="number" placeholder="Age" name="age" id="age">
                                        <br>
                                        <input type="text" class="form-control" placeholder="Enter address" name="address">
                                        <br>
                                        <input type="submit" name="add_patient" value="Add" class="btn btn-success">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </form>
                                        <?php

                                        if(isset($_POST['add_patient']))
                                        {
                                            include 'connectToDatabase.php';

                                            $fullName=$_POST['fullName'];
                                            $email=$_POST['email'];
                                            $password=$_POST['password'];
                                            $sex=$_POST['sex'];
                                            $age=$_POST['age'];
                                            $address=$_POST['address'];

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
                                            $insertquery = " INSERT INTO patient (fullName,email,password,sex,address,age) 
                                            VALUES ('$fullName','$email','$password','$sex','$address','$age') ";

                                            $iquery=mysqli_query($conn,$insertquery);

                                        ?>
                                        <script>
                                        alert("Patient data added");
                                        </script>
                                        <?php
    
                                        header('location:admin_login.php');
    
                                        }
                                        }

                                    ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
</div>

<br><br>

<hr>

<div class="text">
        <p>
            <h3>Query From User</h3>
        </p>
</div>

<?php

include 'connectToDatabase.php';

$query = "SELECT * FROM help";

$result = mysqli_query($conn,$query);

$sNo=0;

if(mysqli_num_rows($result)>0)
{
    echo "<table class='table table-striped'> <thead> <tr> <th scope='col'> S.No. </th> <th scope='col'>Name</th> <th scope='col'>Email</th> <th scope='col'>Message</th>  </tr> </thead>";
  echo "<tbody> ";
    while($row=mysqli_fetch_array($result))
  {
    $sNo++;
    echo "<tr>";
    echo "<th scope='row'>".$sNo."</th>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['message']."</td>";
  }
  echo "</tbody> </table>";
}

?>

<hr>


<footer>
        <p>Thank You...</p>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>