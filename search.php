<html>
<head><title>School Profile</title>
<link rel="stylesheet" href="css\search.css"></head>
<body>
	<div class="head">
    <ul> 
      <li id="logo">AlphaToDelta...</li>
      <li><a class="navbar" href="about_us.php">About Us</a></li>
      <li><a class="navbar" href="contact.php">Contact Us</a></li>
      <li><a class="navbar" href="user_login.php">User Login</a></li>
      <li><a class="navbar" href="school_login.php">School Login</a></li>
      <li><a class="navbar" href="index.php">Home</a></li>
     </ul>
 </div>
 <div style="height:3px; background-color:#009688"></div>
<div id="content">
<form action="search_result.php" method="post">
   <h3>School Details</h3>
   <div id="line"></div>
  <input type="text" name="ownership" size="50" placeholder="Enter type of your school [primary/secondary/.. etc]..."/><br>
  <input type="text" name="type" size="50" placeholder="Enter ownership[government/private]..."/><br>
  <input type="text" name="medium" size="50" placeholder="Enter medium of education you provide..."/><br>
  <input type="text" name="board" size="50" placeholder="Enter board of school..."/><br><br>
  <label for="mode">Mode of education:</label><br>
  <input type="radio" name="mode" class="radio" value="Co-education">Co-education<br>
  <input type="radio" name="mode" value="Girls">Girls<br>
  <input type="radio" name="mode" value="Boys">Boys<br>
  <label for="hostel">Hostel Facility:</label><br>
  <input type="radio" name="hostel" class="radio" value="Yes">Yes<br>
  <input type="radio" name="hostel" value="No">No<br>
  <input type="submit" value="Search" />
</form>
</div>
</body>
</html>