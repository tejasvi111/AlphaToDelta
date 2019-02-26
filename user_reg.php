<html>
<head>
<link href="css/user_reg.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<script>
function formValidation()
{
 var x=document.getElementsByTagName("input");
 var y=x[5].value;
 var p=x[6].value;
 var z=true;
 var n=x[3].value;
 var len=n.length;
  var pswlen=y.length;
if(pswlen<=6)
{
  alert("password must be greater than 6 digit");
  return false ;
}   
 if(len>10 || len<10)
  {
	  
	     z=false;
		  alert("Please provide 10 digit phone number");
		  	  
  } 
  else
  {
	  if(len==10 && n[0]==0)
	  {
		  z=false;
	      alert("Enter Valid phone number");
	  }		  
  }  

   if(p!=y)
   {
	   z=false;
   alert("Please Enter Same Password as Above");
   }
  
   return(z);	 

}

</script>
<div id="outer">
<div id="left"><center><img src="images/c1.png" height="300" width="300"/></center></div><div id="right">
<form name="regform" action="user_loc.php" method="post" onsubmit="return formValidation()">
<table>
<caption><h2>New to AlphatoDelta? Please register here....</h2><hr color="#009688"/><br/></caption>
<tr><td>Enter your Name:</td>
<td><input type="text" name="name" class="txt" required></td>
</tr>
<tr><td>Select your gender:</td><td><input type="radio" value="Female" name="gender">Female
 <input type="radio" value="Male" name="gender">Male</td></tr>
<tr><td>Enter your Contact No.:</td><td><input type="number" name="mob" class="txt"></td></tr>
<tr><td>Enter your Email ID:</td>
<td><input type="email" name="email" class="txt" required></td>
</tr>
<tr><td>Enter your password:</td>
<td><input type="password" name="psw" class="txt" required></td>
</tr>
<tr><td>Please confirm your password:</td>
<td><input type="password" name="cpsw" class="txt" required></td></tr>
<tr><td><center><input type="reset" value="Reset" class="btn"></center></td>
<td><center><input type="submit" name="submit" value="Submit" class="btn"></center></td>
</tr>
</table>
</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br>
<div id="footer">
		<div id="left1"> &copy; <a href="https://www.ietlucknow.ac.in/">Institute of Engineering and Technology Lucknow</a></div>
         <div id="right1">Developer:Tejasvi Mishra</div>
         </div>
</body>
</html>