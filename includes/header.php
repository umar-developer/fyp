<?php session_start();

error_reporting(0)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon  -->
    <link rel="shortcut icon" href="assests/img/cc.jpg">
    <!-- // Favicon  -->

  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
    

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="css/style.css">
    <title>climate change</title>
</head>

<?php include('connection.php') ?>

<body>
    <!-- navbar section -->
    <!-- header section start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light  custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assests/img/Logo_white_version.png" class="img-fluid custom-logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                   
                        <?php if(isset($_SESSION['u_id'])){  ?>
                            <li class="nav-item  ">
                        <a class="nav-link text-successs font-weight-bold" href="dashboard.php">DASHBOARD</a>
                    </li>
                       <?php  }else{ ?>
                       <li class="nav-item  ">
                        <a class="nav-link text-successs font-weight-bold" href="index.php">HOME</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item ">
                        <a class="nav-link text-light font-weight-bold" href="climate-globe.php">CLIMATE GLOBE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light font-weight-bold" href="donation.php">DONATION</a>
                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item"><a href="weather.php" class="nav-link text-light font-weight-bold">WEATHER</a></li>
                    <li class="nav-item">
                        <a class="nav-link text-light font-weight-bold" href="complaint.php">COMPLAINTS</a>
                    </li>
                    
                    
                    <?php 
                    
                    if($_SESSION['role_id']==1){
                    
                    ?>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="all-user.php">View all users</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="view-complaint.php">View Complaints</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="view-forgot.php">View forgot Password</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light btn btn-primary font-weight-bold" href="loggout.php">logout</a>
                    </li> 
<?php  }else{?>
                </ul>

                <ul class="navbar-nav ml-auto ">
                    <?php 
                    
                    if(!isset($_SESSION['u_id'])){
                    
                    ?>

                    <li class="nav-item  ">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Login
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Login first</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="login-process.php" method="post">
                                            <div class="form-group">
                                                <label for="" class="text-left font-weight-bold">Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left font-weight-bold">Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="pull-left text-left p-1"><input type="checkbox" value="Remember Password">Remember Password</div>
                                            <div class="pull-right text-right mt-n4">
                                                <a href="forgot.php">Forgot Password</a></div>

                                            <button class="btn btn-primary" name="logg">Login</button>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>




                    <li class="nav-item  ">
                        <!-- Button trigger modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                            Register
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Create Account</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="register-process.php" method="post">
                                            <div class="form-group">
                                                <label for="" class="text-left font-weight-bold">First Name</label>
                                                <input type="text" class="form-control" name="f_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left font-weight-bold">Last Name</label>
                                                <input type="text" class="form-control" name="l_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left font-weight-bold">Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left font-weight-bold">city</label>
                                                <input type="text" class="form-control" name="city">
                                            </div>

                                            <div class="form-group">
                                                <label for="" class="text-left font-weight-bold">Password</label>
                                                <input type="passsword" class="form-control" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left font-weight-bold">Phone</label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>

                                            <button class="btn btn-primary" name="register">Submit</button>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>

                    <?php }else{ ?>



                    <li class="nav-item">
                        <a class="nav-link text-light btn btn-primary font-weight-bold" href="loggout.php">logout</a>
                    </li>

                    <?php } ?>

                    <!-- <li class="nav-item  ">
                        <a class="btn btn-primary" href="index.php">Logout</a>
                    </li> -->



                </ul>
<?php } ?>
                <!-- <div id="google_translate_element" class="mt-4"> -->

            </div>
            <!-- <div id="google_translate_element" class=""> -->
            <!-- <div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"> -->
            <!-- <select class="goog-te-combo" aria-label="Language Translate Widget"> -->
            <!-- <option value="">Select Language</option> -->
            <!-- <option value="ar">Arabic</option> -->
            <!-- <option value="nl">Dutch</option> -->
            <!-- <option value="de">German</option> -->
            <!-- <option value="fa">Persian</option> -->
            <!-- <option value="ru">Russian</option> -->
            <!-- <option value="ur">Urdu</option> -->
            <!-- </select> -->
            <!-- </div>Powered by  -->
            <!-- <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com" target="_blank"><img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a> -->
            <!--
            </span>
        </div>
        </div>
-->
            <!--


        </div>
-->
        </div>
    </nav>



    <!-- navbar section -->
