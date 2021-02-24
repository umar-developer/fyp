<?php  

include('includes/connection.php');

if(isset($_POST['update'])){
    $uid = $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    
    $query = mysqli_query($con , "UPDATE `user_tb` SET `first_name`= '$fname',`last_name`='$lname',`email`='$email',`city`='$city',`phone`='$phone' WHERE u_id = $uid");
    
    if($query == true){
       header('location:all-user.php');
    }else{
        echo "Noo";
    }
    
    
}

?>