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

if(isset($_POST['upload']))
{
    include 'connectToDatabase.php';

    $fullName=$_POST['fullName'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    
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
        $insertquery = " INSERT INTO patient (fullName,email,sex,age,address) 
        VALUES ('$fullName','$email','$sex','$age','$address') ";
    
        $iquery=mysqli_query($conn,$insertquery);
    }}

?>

    <div class="container">
        <div class="row">
        <div class="col-sm">

</div>
            <div class="col-sm">
                <div class="registrationForm">
                    <div class="text">
                        <p>
                            <h3>Registration</h3>
                        </p>
                    </div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            
                            <input type="text" class="form-control" placeholder="Enter your name" name="fullName" id="fullName">

                            <br>
                            
                            <input type="text" class="form-control" placeholder="Email id" name="email" id="email">

                            <br>

                            <label for="sex">Sex :</label>
                            <br>
                            <select class="form-control" name="sex" id="sex">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Others</option>
                            </select>

                            <br>

                            <label for="age">Age :</label>
                            <input class="form-control" type="number" name="age" id="age">

                            <br>

                            <input class="form-control" type="text" name="address" id="address" placeholder="City">

                            <br>

                            <label for="file">Choose File :</label>
                            <input type="file" class="form-control-file" name="file" id="image">

                            <br>

                            <input type="submit" class="btn btn-success" value="Upload" id="upload" name="upload">

                            <p id="note"> <span style="color: red;"></span> </p>
                            <p id="countdown"></p>
                            <p id="output_file"></p>
                          
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">

            </div>
            
        </div>
    </div>

    <footer class="foot">
        <p>Thank You...</p>
    </footer>

    <?php

    if(isset($_POST['upload']))
{
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_loc = $_FILES['file']['tmp_name'];
    $file_store = "input/".$file_name;

    if(move_uploaded_file($file_tem_loc,$file_store))
    {
        ?>
        <script>
                alert("File uploaded.");

                const note = document.getElementById('note');
                note.innerHTML = "Don't close window.";

                document.getElementById("upload").disabled = true;

                const startingMinutes = 1;
        let time = startingMinutes*60;

        const countdownEl = document.getElementById('countdown');

        setInterval(updateCountdown,1000);

        function updateCountdown() {
            const minutes  = Math.floor(time/60);
            let seconds = time%60;

            countdownEl.innerHTML = minutes +":"+seconds;

            if(minutes==0 && seconds==0)
            {
                countdownEl.style.visibility = "hidden";
                note.style.visibility = "hidden";
                const outputFile = document.getElementById("output_file");
                document.getElementById("upload").disabled = false;
                outputFile.innerHTML = "Click here to check result : <a href='output/output.pdf' target='_blank'>Click here </a> ";
                window.open("output/output.pdf","_blank");
            }

            time--;
        }
            </script>
        <?php
    }
}

?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>