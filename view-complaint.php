
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
    
    $query = mysqli_query($con , "SELECT complaint.comp_id ,complaint.complaint ,complaint.status ,user_tb.first_name ,user_tb.last_name ,user_tb.email ,user_tb.city ,user_tb.phone FROM `complaint` 
    JOIN user_tb ON user_tb.u_id = complaint.u_id");
   
    
    ?>
<table class="table">
 
 <tr>
     <th>No%</th>
     <th>Complaint</th>
     <th>First name</th>
     <th>Last name</th>
     <th>Email</th>
     <th>City</th>
     <th>Phone</th>
     <th>Status</th>
     <th>Action</th>
     
    
 </tr>
 
  
  
   <?php while( $rows = mysqli_fetch_assoc($query)){ ?>
   <tr>
       <td><?php echo $rows['comp_id'] ?></td>
       <td><?php echo $rows['complaint'] ?></td>
       <td><?php echo $rows['first_name'] ?></td>
       <td><?php echo $rows['last_name'] ?></td>
       <td><?php echo $rows['email'] ?></td>
       <td><?php echo $rows['city'] ?></td>
       <td><?php echo $rows['phone'] ?></td>
       <td><?php echo $rows['status'] ?></td>
       <td><a href="update.php?uid=<?php echo $rows['u_id'] ?>"class="btn btn-success">Approved</a></td>
       <td><a href="update.php?uid=<?php echo $rows['u_id'] ?>"class="btn btn-danger">Decline</a></td>
       
     
  
   </tr>
    <?php } ?>
    
</table>

    </div>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/index.js"></script>
</body>


