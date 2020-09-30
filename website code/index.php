<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>Smart Doctor</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/colors.css">
<link rel="stylesheet" href="css/versions.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/custom.css">
<script src="js/modernizer.js"></script>
</head>

<body class="clinic_version">
    <!-- LOADER 
    <div id="preloader">
        <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
    </div>
    <!-- END LOADER -->

    <div class="header-bottom wow fadeIn">
        <div class="container">
            <nav class="main-menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        <li><a class="active" href="index.html">Home</a></li>
                        <li><a data-scroll href="#about">About us</a></li>
                        <li><a data-scroll href="#service">Services</a></li>
                        <li><a data-scroll href="#doctors">Doctors</a></li>
                        <li><a data-scroll href="#testimonials">Testimonials</a></li>
                        <li><a data-scroll href="#getintouch">Contact</a></li>
                        <li><a data-scroll href="login.php">Login</a></li>
                        <li><a data-scroll href="admin_login.php">Admin</a></li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
    </header>
    <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-contant">
                        <h2>

                            <a href="" class="typewrite" data-period="2000" data-type='[ "Smart Doctor, Welcomes You", "We Care Your Health", "We are Expert!" ]'>
                                <span class="wrap"></span>
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="section wow fadeIn">
        <div class="container">
            <div class="heading">
                <img src="images/logo_smartdoctor_160.png" alt="#">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">

                        <h2>What We Do</h2>
                        <p class="lead">Smart doctor cares about you ,your health & your time. Suffering from any skin problem just visit us.</p>
                        <p>  We predict your disease and suggest the precautions , medicine accordingly and all these you can get in just one click. Come to us and upload your disease picture , rest have trust on us. If you are not satisfied with our result then we have highly expert doctors connection to whom you can book your appointment.
                        </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_03.jpg" alt="" class="img-responsive">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div id="service" class="services wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="inner-services">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                                <h4>PREMIUM FACILITIES</h4>
                                <p>We keep our system up to date with latest technologies</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                                <h4>LARGE TEAMS</h4>
                                <p>Large teams working just for you to provide you better facilities</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="serv">
                                <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                                <h4>DETAILED REPORT</h4>
                                <p>Detailed report generated in couple of minutes </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="appointment-form">
                        <h3><span>+</span> Book Appointment</h3>
                        <div class="form">
                            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <fieldset>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="text" id="name" placeholder="Your Name" name="name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email Address" id="email" name="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                        <div class="row">
                                            <div class="form-group">
                                                <select class="form-control" name="day" id="day">
                                          <option>Day</option>
                                          <option value="Mon">Monday</option>
                                          <option value="Tues">Tuesday</option>
                                          <option value="Wed">Wednesday</option>
                                          <option value="Thu">Thursday</option>
                                          <option value="Fri">Friday</option>
                                          <option value="Sat">Saturday</option>
                                       </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="time">
                                          <option>Time</option>
                                          <option value="am">AM</option>
                                          <option value="pm">PM</option>
                                       </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <select class="form-control" name="doctor" id="doctor">
                                                <?php
                                                    include 'connectToDatabase.php';

                                                    $query = "SELECT * FROM doctor";

                                                    $result = mysqli_query($conn,$query);

                                                    if(mysqli_num_rows($result)>0)
                                                    {
                                                        while($row=mysqli_fetch_array($result))
                                                        {
                                                            $name = $row['fullName'];
                                                            echo "<option value=' ".$name." '>.$name.</option>";
                                                        }
                                                    }
                                                ?>
                                       </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..." name="message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="center"><input type="submit" value="Submit" name="appointmentsubmit"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <?php
                            if(isset($_POST['appointmentsubmit'])){
                                include 'connectToDatabase.php';

                                $Aname = $_POST['name'];
                                $email = $_POST['email'];
                                $day = $_POST['day'];
                                $time = $_POST['time'];
                                $doctor = $_POST['doctor'];
                                $message = $_POST['message'];

                                $insertquery = "INSERT INTO appointment(name, email, day, time, doctorName,message)
                                 VALUES ('$Aname','$email','$day','$time','$doctor','$message')";

                                $iquery=mysqli_query($conn,$insertquery);

                                ?>

                                <script>
                                    alert("Appointment added.");
                                </script>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">

            <div class="heading">
                <img src="images/logo_smartdoctor_160.png" alt="#">

            </div>

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Dr. Sachin Verma</h3>

                        </div>
                        <p>MBBS, MD - Dermatology

                           Dermatologist
                           13 Years Experience Overall  (9 years as specialist)</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Dr. Aarti Sarda </h3>

                        </div>
                        <p>MBBS, MD - Dermatology

                                                      Dermatologist
                                                      13 Years Experience Overall  (9 years as specialist)</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="widget clearfix">
                        <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Mathur Singh</h3>

                        </div>
                        
                        <p>MBBS, MD - Dermatology
                           Dermatologist
                           13 Years Experience Overall  (9 years as specialist)</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonials" class="section wb wow fadeIn">
        <div class="container">
            <div class="heading">
                <img src="images/logo_smartdoctor_160.png" alt="#">
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                            <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                            <h4>Andrew Atkinson <small>- Life Manager</small></h4>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="invis">
            <div class="row">
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> The amazing clinic! Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                            <h4>Amanda DOE <small>- Manager of Racer</small></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Thanks for Help us!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                            <h4>Martin Johnson <small>- Founder of Goosilo</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
        <div class="container">
            <div class="heading">
                <img src="images/logo_smartdoctor_160.png" alt="#">

            </div>
        </div>
        <div class="contact-section">
            <div class="form-contant">
                <form id="ajax-contact" action="assets/mailer.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group in_name">
                                <input type="text" class="form-control" placeholder="Name" id="name" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group in_email">
                                <input type="email" class="form-control" placeholder="E-mail" id="email" required="required">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group in_message">
                                <textarea class="form-control" id="message" rows="5" placeholder="Message" id="message" required="required"></textarea>
                            </div>
                            <div class="actions">
                                <button type="submit" name="submit" id="submitButton" class="btn small" title="Submit Your Message!" onclick="insert()">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div style="width:100%;height:450px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4080.3922535227816!2d86.95525492251143!3d25.234793102747872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f04a139508ce6b%3A0xd68bb33b2d8fcf85!2sTilkamanjhi%2C%20Bhagalpur%2C%20Bihar%20812002!5e0!3m2!1sen!2sin!4v1600767465949!5m2!1sen!2sin"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <footer id="footer" class="footer-area wow fadeIn">
        <div class="col-md-4">
            <img src="images/logo_smartdoctor_160.png" alt="#">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="footer-info padding">
                <h3>CONTACT US</h3>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Vidhya Puram Colony , Bhagalpur</p>
                <p><i class="fa fa-paper-plane" aria-hidden="true"></i> smartdoctor@gmail.com</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> (+91) 7717111814 </p>
            </div>
        </div>

        </div>
        </div>
    </footer>

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>

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
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>