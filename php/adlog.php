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
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.loginbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .loginbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<div id="header"><h1><font size="16"><b>SONAM &nbsp;  &nbsp; HOSTEL</b></font></h1></div>
<div class="navi">
<ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="abt.html">About</a></li>
  <li><a href="faci.html">Facility</a></li>
 <li><a href="rule.html">Rule</a></li>
  <li><a href="room.html">Room</a></li>
  <li><a href="contact.html">Contact</a></li>
  


</ul>


<html>
<body style="background-color:#E5E5E5">
<div align="center">
<form method="post">
<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><font size="+2"><strong>Login Panel For Admin</strong></font></legend><p><b>UserName : </b><input type="text" name="uname" required/>*</p>
<p><b>Password : </b><input type="password" name="upass" required/>*</p><br>
<p><input type="submit" value="Login" name="login"/></p>

</fieldset>
</form>
</div>
</body>

</html>


<?php

//connectivity
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"mgm");

if(isset($_POST['login']))
{
	$u = $_POST['uname'];
	$pass = $_POST['upass'];

	$p = md5($pass);
	
        
//user check
$q = "SELECT pass FROM admindb WHERE email='$u'";
$cq = mysqli_query($con,$q);
$row = mysqli_fetch_assoc($cq);
$ret=$row["pass"];
if($ret == $pass)
{
	echo "<script>document.location='apprec.php'</script>";
//	echo "<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
}
else
{
	echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
}
mysqli_close($con);
}

?>
<script>


</script>
