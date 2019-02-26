<?php
session_start();
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'alphatodelta');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
	$res="select * from user";
 $query=mysqli_query($con,$res);
 $val=mysqli_fetch_array($query);
?>
<html>
<head>
<link href="css/user_home.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div id="outer">
<div id="header">
<div id="title1"><span id="sp1">AlphaT</span>
<span id="sp2"><u>O</u></span>
<span id="sp3">Delta</span><br/></div>
<div id="menu">
<a href="user_login.php"><div class="menubox">Log Out</div></a>
<a href="search_result.php"><div class="menubox">View School List</div></a>
<a href="search.php"><div class="menubox">Search</div></a>
<a href="index.html"><div class="menubox">Home</div></a>
</div>
</div>
<div id="content">
<div id="profile">
<div id="pic"><img src="images/c1.png" height="160" width="140" style="padding-top:20px;">
</div><br/><center><h3>Welcome! <?php echo $val['name']; ?></h3></center>
</div>
</div>
<div id="footer">
		<div id="left1"> &copy; <a href="https://www.ietlucknow.ac.in/">Institute of Engineering and Technology Lucknow</a></div>
         <div id="right1">Developer:Tejasvi Mishra</div>
         </div>
</div>
</body>
</html>