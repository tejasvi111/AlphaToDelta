<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'alphatodelta');
if(!$con)
    echo "<script> alert('Connection Failed') </script>";

$sname=$_POST['sname'];
$type=$_POST['type'];
$gtype=$_POST['gtype'];
$medium=$_POST['medium'];
$board=$_POST['board'];
$hostel=$_POST['hostel'];
$mob=$_POST['mob'];
$sid=$_POST['sid'];
$psw=$_POST['psw'];
$cpsw=$_POST['cpsw'];

if(isset($sname))
{
	
	$db="INSERT INTO school_details(sname,type,gtype,medium,board,hostel,mob,sid,psw,cpsw)	
values('".$sname."','".$type."','".$gtype."','".$medium."','".$board."','".$hostel."','".$mob."','".$sid."','".$psw."','".$cpsw."')";
	$query=mysqli_query($con,$db);
	header('Location: http://localhost/alphatodelta/school_login.php ');
}	
else
	echo "Failed";
?>