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
<?php 

include ('includes/connection.php');
include ('includes/header.php');
?>
<body>
<div class="grid container">
    <div class="col-md-12 border-length">
        <h1 class="text-center what-we-do pt-5"><span class="changes"> Reset</span> Password Process</h1>
    </div>
</div>
<div class="container pt-5 offset-md-3">
    <div class="row">
        <div class="col-md-6 ">

            <form action="forgot-process.php" method="POST">

        <div class="form-group">
         <label for="" class="text-left font-weight-bold">Email</label>
         <input type="email" class="form-control" name="p_email">
             </div>
      <div class="form-group">
        <label for="" class="text-left font-weight-bold">Contact No</label>
        <input type="contact" class="form-control" name="p_contact">
            </div>
            <div class="form-group">
        <label for="" class="text-left font-weight-bold">New desired Password</label>
        <input type="password" class="form-control" name="p_password">
            </div>
            <button class="btn btn-warning btn-block font-weight-bold" name="p_submit">Submit my Request</button>
            <button class="btn btn-warning btn-block font-weight-bold" name="submit">Reset</button>
            </form>
         
        </div>
    </div>
</div>










<?php
include('includes/footer.php');
?>
</body>
</html>