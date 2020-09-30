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
                    <a class="nav-link" href="logout.php"><span class="fas fa-sign-in-alt"></span> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text">
        <p>
            <h1> Welcome You...</h1>
        </p>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-sm"></div>
            <div class="col-sm">
                <div class="registrationForm">
                    <div class="text">
                        <p>
                            <h3>Upload File </h3>
                        </p>
                    </div>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <br>
                            <label for="file">Choose File :</label>
                            <input type="file" class="form-control-file" name="file" id="image">
                            <br>

                            <p><span style="color: red;">Note : Upload image of a skin disease.</span> </p>
                            
                            <input type="submit" class="btn btn-success" value="Upload" id="upload" name="upload">
                            <br>
                            <p id="note"> <span style="color: red;"></span> </p>
                            <p id="countdown"></p>
                            <p id="output_file"></p>
                            <p id="appointment"></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="registrationForm">
                    <div class="text">
                        <p>
                            <h3>Help Center</h3>
                        </p>
                    </div>
                    <form >
                        <div class="form-group">
                           
                            <input type="text" class="form-control" placeholder="Name"  id="name">

                            <br>

                            <input type="text" class="form-control" placeholder="E-mail"  id="email">

                            <br>

                            <textarea cols="145" rows="5" id="message" placeholder="Message"></textarea>

                            <br><br>

                            <button type="button" name="submit" class="btn btn-primary" onclick="insert()">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">

            </div>
            
        </div>
    </div>

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
                window.open("https://www.google.com", "_blank");
                const note = document.getElementById('note');
                note.innerHTML = "Wait till timer stops ... Please Don't close window.";

                document.getElementById("upload").disabled = true;

                const startingMinutes = 2;
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
                const appoint = document.getElementById('appointment');
                const outputFile = document.getElementById("output_file");
                document.getElementById("upload").disabled = false;
                outputFile.innerHTML = "Click here to check result : <a href='output/output.pdf' target='_blank'>Click here </a> "
                appoint.innerHTML = "For book an appointment : <a href='#service'>Click here</a>";
                window.open("output/output.pdf","_blank");
            }

            time--;
        }
            </script>
        <?php
    }
}

?>


    <footer >
        <p>Thank You...</p>
    </footer>


    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-analytics.js"></script>

    <script type="text/javascript">
      var firebaseConfig = {
    apiKey: "AIzaSyD662oHFV75NzyN13cigaXnY2Wapw_sBsM",
    authDomain: "smartdoctor-5941e.firebaseapp.com",
    databaseURL: "https://smartdoctor-5941e.firebaseio.com",
    projectId: "smartdoctor-5941e",
    storageBucket: "smartdoctor-5941e.appspot.com",
    messagingSenderId: "338657590499",
    appId: "1:338657590499:web:a16251269b6921333359d6",
    measurementId: "G-V6PG7HZPS2"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
    </script>

<script>
        function insert() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            firebase.database().ref('user/' + name).set({
                userName: name,
                userEmail: email,
                userMessage: message
            });

           alert("Thank you. Your feedback is saved.")
           window.location.href = "helpQuery.php?name="+name+"&email="+email+"&message="+message;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
