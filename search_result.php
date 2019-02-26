<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'alphatodelta');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
	
 
 
$type=$_POST['type'];
$medium=$_POST['medium'];
$board=$_POST['board'];
$mode=$_POST['mode'];
$hostel=$_POST['hostel'];

$res="select sname from school_details WHERE type='$type' AND gtype='$mode' AND board='$board'
AND medium='$medium' AND hostel='$hostel'";
 $query=mysqli_query($con,$res);
 if(!$query)
 {
	 echo "<script> alert('DATA BASE NOT FOUND') </script>";
 }
 ?>
 <html>
<head>
<link href="css/contact_css.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="outer">
<div id="header">
<div id="title1"><span id="sp1">AlphaT</span>
<span id="sp2"><u>O</u></span>
<span id="sp3">Delta</span><br/></div>
<div id="menu">
<a href="about_us.php"><div class="menubox">About us</div></a>
<a href="user_login.php"><div class="menubox">Log Out</div></a>
<a href="search_result.php"><div class="menubox">View School List</div></a>
<a href="search.php"><div class="menubox">Search</div></a>
<a href="index.php"><div class="menubox">Home</div></a>
</div>
</div>
<div id="content">
 
   <span class="t1"><u><br><br>list of schools name  matched with the given information:<br><br>
   </u></span><br/><br/>
 
 
				<span class="t1"><?php 
$num=mysqli_num_rows($query);
for($i=0;$i<$num;$i++)
 {
	 $val=mysqli_fetch_array($query);
	 {
		 echo $val['sname'];
		 echo "<br>";
	 }
 }

?>
</span>
</div>
</div>
</body>

</html>

 


 
 