<?php 

session_start();

session_unset['role_id'];

session_destroy();

header('location:index.php');


?>