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



<body>

    <?php 
    
    if(isset($_GET['uid'])){
        $uid = $_GET['uid']
    
    
    ?>


    <div class="container">
        <div class="col-md-6 offset-md-3 mt-4 bg-danger p-3 text-center">
            <p class="font-weight-bold text-light">Are you sure want to delete this</p>
            <form action="delete.php" method="get">
                <input type="hidden" name="del-id" value="<?php echo $uid ?>">
                <input type="submit" class="btn btn-dark btn-block font-weight-bold" name="yes" value="yes">
                <a href="all-user.php" class="btn btn-dark btn-block font-weight-bold">No</a>
            </form>
        </div>
    </div>

    <?php }elseif(isset($_GET['yes'])){
        
        $res = $_GET['del-id'];
        
        $query = mysqli_query($con , "DELETE FROM `user_tb` WHERE user_tb.u_id = $res");
        
          if($query == 'true'){
              
       header('location:all-user.php');
              
    }else{
        echo "Noo";
    }
        
        
        
    }?>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>
