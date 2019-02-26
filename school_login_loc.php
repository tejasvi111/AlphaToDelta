<?php

 session_start();
{
$sid=$_POST['sid'];
$psw=$_POST['psw']; 
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'alphatodelta');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
 
 $res="select* from school_details";
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
		 if($val['sid']==$sid && ($val['psw'])==$psw)
		 {
			 header('Location: http://localhost/alphatodelta/index.php');
			 $temp=1;
		 }
		 
	 } 
 }
 if($temp==0)
 {
	 
	
	 echo "<script> alert('Invalid school id or password') </script>";
 }

 
}

?> 