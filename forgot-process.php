<?php 
include('includes/connection.php');
if(isset($_POST['p_submit']));

$email = $_POST['p_email'];
$contact = $_POST['p_contact'];
$password = $_POST['p_password'];



$query = mysqli_query($con , "INSERT INTO `password_reset`( `user_email`, `user_contact`, `new_password`) VALUES ('$email' , '$contact' , '$password')");

if ($query == true){
    header('location:forgot.php');

}else{
    echo 'no';
}







?>