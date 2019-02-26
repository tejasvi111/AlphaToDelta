<?php
session_start();
{
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'alphatodelta');
if(!$con)
    echo "<script> alert('Connection Failed') </script>";

$email=$_POST['email'];
$psw=$_POST['psw']; 
$cpsw=$_POST['cpsw'];
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
		 if($val['email']==$email)
		 {
			 $temp=1;
			 if(isset($email))
               {
	
	              $db="UPDATE user SET psw='$psw',cpsw='$cpsw'	WHERE email='$email'";
	               if(mysqli_query($con,$db))
				   {
					  $temp=2;
					  echo "<script> alert('password successfully changed :) please login to continue') </script>";
				      echo "<script> window.location.href='http://localhost/alphatodelta/user_login.php'</script>";
					 }
				   else
				   {
					 echo "<script> alert('error') </script>";  
				   }
               }	
             else
	              echo "Failed";
		 }
		 
	 } 
 }
 if($temp==0)
 {
	 echo "<script> alert('Email id is not registered') </script>";
	 echo "<script> window.location.href='http://localhost/alphatodelta/user_forgotpsw.php'</script>";
 }
 
}
?> 