<?php include('includes/connection.php') ?>

<?php 
 
 $uid = $_SESSION['u_id'];

 if(isset($_POST['submit'])){
      $uid = $_POST['uid'];
     $comp = $_POST['comp'];
 
     
     $query = mysqli_query($con,"INSERT INTO `complaint`(`complaint`, `u_id`, `status`) 
                                    VALUES ('$comp','$uid',1)");

    if($query){
         header('location:complaint.php');
    }else{
        echo "no";
    }
 }
?>