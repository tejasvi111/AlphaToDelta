<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'alphatodelta');
if(!$con)
    echo "<script> alert('Connection Failed') </script>";

$name=$_POST['name'];
$gender=$_POST['gender'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$cpsw=$_POST['cpsw'];

if(isset($name))
{
	
	$db="INSERT INTO user(name,gender,mob,email,psw,cpsw)	
values('".$name."','".$gender."','".$mob."','".$email."','".$psw."','".$cpsw."')";
	$query=mysqli_query($con,$db);
	header('Location: http://localhost/alphatodelta/user_login.php ');
}	
else
	echo "Failed";
?>