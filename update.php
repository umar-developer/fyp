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
        <link rel="stylesheet" href="../css/style.css">

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="./css/style.css">


    <title>climate change</title>
</head>

<?php include('includes/connection.php') ?>
<?php include('includes/header.php') ?>


<?php
    
    $uid = $_GET['uid'];
    
    $query = mysqli_query($con,"select * from user_tb where u_id = $uid") ;
    
    $rows = mysqli_fetch_assoc($query);
    
    ?>

<body>
    <div class="container">

        <div class="myfrom my-4">


            <div class="col-md-6 offset-md-3">
                

                <div class="header bg-warning text-center font-weight-bold">
                    <h1><?php echo $rows['first_name'].$rows['last_name'] ?></h1>
                </div>
                <form action="update-process.php" method="post">
                   <input type="hidden" name="uid" value="<?php echo $rows['u_id'] ?>">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" value="<?php echo $rows['first_name']  ?>" name="fname">
                    </div>

                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" value="<?php echo $rows['last_name']  ?>" name="lname">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" value="<?php echo $rows['email']  ?>" name="email">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="Password" class="form-control" value="<?php echo $rows['password']  ?>" name="password" disabled>
                    </div>

                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" class="form-control" value="<?php echo $rows['city']  ?>" name="city">
                    </div >

                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" value="<?php echo $rows['phone']  ?>" name="phone">
                    </div>

                    <button class="btn btn-warning font-weight-bold" name="update">Cliick Here to Update</button>

                </form>
            </div>
        </div>



    </div>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>
