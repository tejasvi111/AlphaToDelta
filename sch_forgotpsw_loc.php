<?php
session_start();
{
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'alphatodelta');
if(!$con)
    echo "<script> alert('Connection Failed') </script>";

$sid=$_POST['sid'];
$psw=$_POST['psw']; 
$cpsw=$_POST['cpsw'];
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
		 if($val['sid']==$sid)
		 {
			 $temp=1;
			 if(isset($sid))
               {
	
	              $db="UPDATE school_details SET psw='$psw',cpsw='$cpsw'	WHERE sid='$sid'";
	               if(mysqli_query($con,$db))
				   {
					  $temp=2;
					  echo "<script> alert('password successfully changed :) please login to continue') </script>";
				      echo "<script> window.location.href='http://localhost/alphatodelta/school_login.php'</script>";
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
	 echo "<script> alert('school id is not registered') </script>";
	 echo "<script> window.location.href='http://localhost/alphatodelta/sch_forgotpsw.php'</script>";
 }
 
}
?> 