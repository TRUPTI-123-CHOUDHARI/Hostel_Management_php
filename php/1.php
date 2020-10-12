<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="navi.css">
<style>
<script>
	function go()
	{
		document.location='./login.php';
	}
	function refresh()
	{
		document.location='./index.php';
	}
</script>

.error {color: #FF0000;}

#header {
    background-image:url("headerbgred.jpg");
    color:black;
    height:100px;
    text-align:center;
    padding:2px; 
}
body{
     background-image:url("freebg1.jpg"); 
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>

<div id="header"><h1><font size="16"><b>SONAM &nbsp;  &nbsp; HOSTEL</b></font></h1></div>
<div class="navi">
<ul>
  <li><a href="index.html" >Home</a></li>
  <li><a href="abt.html">About</a></li>
  <li><a href="faci.html">Facility</a></li>
 <li><a href="rule.html">Rule</a></li>
  <li><a href="room.html">Room</a></li>
  <li><a href="contact.html">Contact</a></li>
  

<li style="float:right"><a class="active"  href="" onmousedown="login()">Login</a></li>
</ul>
<body style="background-color:#E5E5E5">
<div align="center">


<form action="" method="post">
	<fieldset style="display: inline-flex; background-color: #D8D8D8;">
	<legend><fontsize="+2"><strong>Registration</strong></font></legend>
	<p><b>UserName : </b><input type="text" name="uname" required/>*</p>
    <p><b>Password : </b><input type="password" name="upass" required/>*</p>

    <p><b>Email : </b><input type="email" name="umail" required/>*</p>
    <p><b>Gender : </b><input type="radio" name="gender" value="Male" checked>Male&nbsp;<input type="radio" name="gender" value="Female">Female</p>
    <p><b>Mobile No. : </b><input type="text" name="umob" required/>*</p>
    <b>Address : </b><textarea placeholder="Input Address" name="address"></textarea>
    <p><b>dob : </b><input type="dob" name="dob" required/>*</p>
	
    <p><input type="submit" name="submit" value="Register">&nbsp;</p>
</form>
</div>


<?php
if(isset($_POST["submit"]))
{

$PHPtext = "Your PHP alert!";

$n=$_POST["uname"];
$p=$_POST["upass"];
$m=$_POST["umail"];
$a=$_POST["gender"];
$mb=$_POST["umob"];
$ad=$_POST["address"];
$dob=$_POST["dob"];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"mgm");
$quer=mysqli_query($con,"insert into hostelDB (Name,pass,email,gender,mob,address,dob) values ('$n','$p','$m','$a','$mb','$ad','$dob')");
if(!$quer)
echo mysqli_error($con);
else echo "<script>document.location='./profregsuccess.php';</script>";


mysqli_close($con);
}
?>


<script> 



function login(){
document.location='./login.php';
}

</script>





</body>
</html>
