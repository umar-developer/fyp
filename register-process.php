<?php 

include('includes/connection.php');
session_start();

if(isset($_POST['register'])){
    
 $fname = $_POST['f_name'];
 $lname = $_POST['l_name'];
 $email = $_POST['email'];
 $city = $_POST['city'];
 $password = $_POST['password'];
 $phone = $_POST['phone'];

    
    
     $query = mysqli_query($con , "INSERT INTO `user_tb`( `first_name`, `last_name`, `email`, `password`, `city`, `phone`, `role_id`) VALUES ('$fname', '$lname','$email' ,'$password','$city','$phone','2')");
    
    $query2 = mysqli_query($con ,"select * from user_tb");
    
    $rows = mysqli_fetch_assoc($query2);
    
    if($query == true){
        
        $_SESSION['u_id'] = $rows['u_id'];
        header('location:index.php');
    }else{
        echo 'no';
    }
    
    
}

?>