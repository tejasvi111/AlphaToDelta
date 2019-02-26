<?php
session_start();
unset($_SESSION['loggedin']);
unset($_SESSION['name']);
unset($_SESSION['email']);
$_SESSION['loggedin']=false;
header('Refresh:0; url=index.php');
echo "<script> alert('successfully logged out') </script>";
?>