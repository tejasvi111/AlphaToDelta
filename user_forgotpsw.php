<html>
<head><title>Forgot password</title>
<link rel="stylesheet" href="css\forgotpsw.css"></head>
<body>

<script>
function formValidation()
{
 var x=document.getElementsByTagName("input");
 var y=x[1].value;
 var p=x[2].value;
 var z=true;
 var pswlen=y.length;
if(pswlen<=6)
{
  alert("password must be greater than 6 digit");
  return false ;
}   
if(p!=y)
   {
	   z=false;
   alert("Please Enter Same Password as Above");
   }
  
   return(z);	 

}

</script>

<div id="content">
<form action="user_forgotpsw_loc.php" method="post" onsubmit="return formValidation()">
   <h3>Re-create your password</h3>
   <div id="line"></div>
  <input type="email" name="email" size="25" placeholder="Enter your registered email id..." required><br>
  <input type="password" name="psw" size="25" placeholder="Enter new password..."required /><br>
  <input type="password" name="cpsw" size="25" placeholder="Re-enter new password..."required /><br>
  <input type="submit" value="Change password" />
</form>
</div>
</body>
</html>