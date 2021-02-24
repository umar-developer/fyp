<?php  

include('includes/connection.php');
session_start();

if(isset($_POST['logg'])){
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];
     
    $query = mysqli_query($con , "SELECT  `u_id` , `email`, `password`,`role_id` FROM `user_tb` WHERE email = '$email'");
    
    
    $rows = mysqli_fetch_assoc($query);
    
    $count = mysqli_num_rows($query);
    
    if($count != 0){
       $fetch_email = $rows['email']; 
       $fetch_pasword = $rows['password']; 
        
        if($email == $fetch_email && $password == $fetch_pasword){
            
            echo $_SESSION['role_id'] = $rows['role_id'];
            
            echo $_SESSION['u_id'] = $rows['u_id'];
            
            if($_SESSION['role_id'] == 1){
                header('location:index.php');
            }else{
                header('location:dashboard.php');
            }
            
            
        }else{
            echo "no";
        }
        
    }else{
        echo "email already exist";
    }
    
}

?>