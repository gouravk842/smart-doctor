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

    <?php

include 'connectToDatabase.php';

if(isset($_POST['userlogin']))
{

    $email=$_POST['email'];
$password=$_POST['password'];

    $emailquery= " select * from patient where email = '$email'  ";
    $query=mysqli_query($conn,$emailquery);

    $emailcount=mysqli_num_rows($query);

    if($emailcount)
    {
        $email_pass=mysqli_fetch_assoc($query);

        $db_pass=$email_pass['password'];

        if($password==$db_pass)
        {
            $_SESSION['user']=$email_pass['fullName'];
            $_SESSION['id']=$email_pass['id'];

            header('location:patient.php');
        }
        else
        {
            ?>
                <script>
                    alert("Password Incorrect ");
                </script>
            <?php
            header('location:login.php');
        }
    }
    else
    {
        ?>
            <script>
                alert("Invalid email...");
            </script>
        <?php
        header('location:login.php');
    }
}

if(isset($_POST['doctorlogin']))
{

    $email=$_POST['email'];
$password=$_POST['password'];

    $emailquery= " select * from doctor where email = '$email'  ";
    $query=mysqli_query($conn,$emailquery);

    $emailcount=mysqli_num_rows($query);

    if($emailcount)
    {
        $email_pass=mysqli_fetch_assoc($query);

        $db_pass=$email_pass['password'];

        if($password==$db_pass)
        {
            $_SESSION['username']=$email_pass['fullName'];

            header('location:doctor.php');
        }
        else
        {
            ?>
                <script>
                    alert("Password Incorrect ");
                </script>
            <?php
            header('location:login.php');
        }
    }
    else
    {
        ?>
            <script>
                alert("Invalid email...");
            </script>
        <?php
        header('location:login.php');
    }
}

    ?>


    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="index.php">Smart Doctor</a>
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
                    <a class="nav-link" href="#"><span class="fas fa-sign-in-alt"></span> Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text">
        <p>
            <h1> Welcome to Smart Clinic</h1>
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="registrationForm">
                    <div class="text">
                        <p>
                            <h3>Registration</h3>
                        </p>
                    </div>
                    <form action="patientRegistration.php" method="POST">
                        <div class="form-group">
                            
                            <input type="text" class="form-control" placeholder="Enter your name" name="fullName" id="fullName">

                            <br>

                            <input type="text" class="form-control" placeholder="abc@gmail.com" name="email" id="email">

                            <br>

                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">

                            <br>

                            <label for="sex">You are :</label>
                            <br>
                            <select class="form-control" name="sex" id="sex">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Others</option>
                            </select>

                            <br>

                            <label for="age">How old are you ?</label>
                            <input class="form-control" type="number" name="age" id="age">

                            <br>

                            <input class="form-control" type="text" placeholder="Enter your city name" name="address" id="address">

                           <br>
                            <button id="float_prp" type="button" name="submit" class="btn btn-success" onclick="upload()">Submit</button>
                            <br><br>
                          
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <div class="registrationForm">
                    <div class="text">
                        <p>
                            <h3>Login</h3>
                        </p>
                    </div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="form-group">

                            <input type="text" class="form-control" name="email" placeholder="Email id">

                            <label for="password">Password :</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            
                            <br>

                            <h4>Login As :</h4>

                            <input class="btn btn-success" type="submit" value="User" name="userlogin">
                            <input class="btn btn-success" type="submit" value="Doctor" name="doctorlogin">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Thank You...</p>
    </footer>

    <script type="text/javascript">

           function upload() {
            var fullName = document.getElementById("fullName").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var sex = document.getElementById("sex").value;
            var age = document.getElementById("age").value;
            var address = document.getElementById("address").value;
           
            window.location.href="patientRegistration.php?fullName="+fullName+"&email="+email+"&password="+password+"&sex="+sex+"&age="+age+"&address="+address;
          
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>