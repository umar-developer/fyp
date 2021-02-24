
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon  -->
    <link rel="shortcut icon" href="assests/img/cc.jpg">
    <!-- // Favicon  -->

    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
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

<body>
<div class="container">
<?php 
    
    $query = mysqli_query($con , "select * from password_reset");
   
    
    ?>
<table class="table">
 
 <tr>
     <th>no%</th>
     <th>Email</th>
     <th>Contact</th>
     <th>Password</th>
 </tr>
 
  
  
   <?php while( $rows = mysqli_fetch_assoc($query)){ ?>
   <tr>
       <td><?php echo $rows['user_id'] ?></td>
       <td><a href="mailto:<?php echo $rows['user_email'] ?>?cc=admin@climatechange.com&bcc=dc@nowshera.com&subject=Compliant to Website Administrator Climate Change&body=i'm complaining to the depty commissinor peshawar or nowshera on the behalf of {issue details}"><?php echo $rows['user_email'] ?></a></td>
       <td><?php echo $rows['user_contact'] ?></td>
       <td><?php echo $rows['new_password'] ?></td>
     
  
   </tr>
    <?php } ?>
    
</table>

    </div>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
</body>


