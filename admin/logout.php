<?php 
session_start();
unset($_SESSION['sesi_user']);
session_destroy();
header('location:./index.php'); 

?>