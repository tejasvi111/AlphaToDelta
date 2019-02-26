<?php

 session_start();
{
$email=$_POST['email'];
$psw=$_POST['psw']; 
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'alphatodelta');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
 
 $res="select* from user";
 $query=mysqli_query($con,$res);

 if(!$query)
 {
	 echo "<script> alert('DATA BASE NOT FOUND') </script>";
 }
   $num=mysqli_num_rows($query);
   $temp=0;
 for($i=0;$i<$num;$i++)
 {
	 $val=mysqli_fetch_array($query);
	 {
		 if($val['email']==$email && ($val['psw'])==$psw)
		 {
			 header('Location: http://localhost/alphatodelta/user_home.php');
			 $temp=1;
		 }
		 
	 } 
 }
 if($temp==0)
 {
	 
	
	 echo "<script> alert('Invalid email id or password') </script>";
	 echo "<script> window.location.href='http://localhost/alphatodelta/user_login.php'</script>";

 }

 
}

?> 