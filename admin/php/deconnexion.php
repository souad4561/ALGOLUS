<?php 
session_start();
header("location:../ui-elements/auth-signin.php");
session_destroy();
?>