<html>
<head>
<link href="css/school_reg.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<script>
function formValidation()
{
 var x=document.getElementsByTagName("input");
 var y=x[3].value;
 var p=x[4].value;
 var z=true;
 var n=x[1].value;
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


<div id="outer" style="font-size:120px;">
<div id="left"><center><img src="images/c3.png" height="450" width="400"/></center></div><div id="right">
<form name="regform" id="form1" action="sch_loc.php" method="post" onsubmit="return formValidation()">
<table>
<caption><h2>New to AlphatoDelta? Please register your school here....</h2><hr color="#009688"/><br/></caption>
<tr><td>Enter your school name:</td>
<td><input type="text" name="sname" class="txt" required></td>
</tr>
<tr><td>Select your School Type:</td><td><select name="type" class="txt" required>
       <option value="Government">Government</option>
	   <option value="Private">Private</option>
	   <option value="Added">Added</option>
	   </select></td></tr>
<tr><td>Select your School Type:</td>
<td><select name="gtype" class="txt" required>
<option value="Girls">Girls</option>
<option value="Boys">Boys</option>
<option value="Co-ed">Co-ed</option>
</select></td></tr>
<tr><td>Select your Teaching Language:</td>
<td><select name="medium" class="txt" required>
<option value="English">English</option>
<option value="Hindi">Hindi</option></select>
</td></tr>
<tr><td>Select your Board:</td>
<td><select name="board" class="txt" required>
<option value="CBSE">CBSE</option>
<option value="ICSE">ICSE</option>
<option value="NCERT">NCERT</option>
<option value="State Board">State Board</option>
<option value="Other">Other</option>
</select>
</td></tr>
<tr><td>Availability of Hostel:</td>
<td>
<select name="hostel" class="txt" required>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</td></tr>
<tr><td>Enter your Contact No.:</td><td>
   <input type="number" name="mob" class="txt" required></td></tr>
<tr><td>Enter your School ID:</td>
<td><input type="text" name="sid" class="txt" required></td>
</tr>
<tr><td>Enter your password:</td>
<td><input type="password" name="psw" class="txt" required></td>
</tr>
<tr><td>Plaese confirm your password:</td>
<td><input type="password" name="cpsw" class="txt" required></td></tr>
<tr><td><center><input type="reset" value="Reset" class="btn"></center></td>
<td><center><input type="submit" value="Submit" class="btn"></center></td>
</tr>
</table>
</form>
</div>
</div>
<br><br><br><br>
<div id="footer">
		<div id="left1"> &copy; <a href="https://www.ietlucknow.ac.in/">Institute of Engineering and Technology Lucknow</a></div>
         <div id="right1">Developer:Tejasvi Mishra</div>
         </div>
</body>
</html>