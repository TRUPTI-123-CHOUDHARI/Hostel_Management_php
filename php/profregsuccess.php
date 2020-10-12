<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="navi.css">
<style>


table { 
   margin-left: 25%;
    padding: 0px 0px;
    text-align: left;
width: 50%;
}
#appl{margin-left:0%;}

td1{margin-top: 0px ; position:absolute;}


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

 <li><a onmousedown = "profile()">PROFILE</a></li>
  <li><a onmousedown = "update()">UPDATE PROFILE</a></li>
<li><a  onmousedown = "viewh()">VIEW HOSTELITES</a></li>
  <li><a  onmousedown = "vr()">VACANT ROOMS </a></li>
  <li><a onmousedown = "changer()">CHANGE ROOM</a></li>
<li><a onmousedown = "app()">APPLICATION STATUS</a></li>
  
  <li><a  onmousedown = "lr()">LEAVE ROOM</a></li>
 <li style="float:right"><a class="active" href="logout.html" onmousedown = "logout()">Logout</a></li>
</ul>

</div>




<?php


	echo "<center><h2 style='color:green'>REGISTER SUCCESSFULLY </h2></center>";




if(isset($_POST["submit"]))
{


echo "<script>document.location='./login.php';</script>";

}
?>
<form action="" method="post">
<div id="appl" align="center">
<p><input type="submit" name="submit" value="login"></p>
</div>
</form>
</body>
</html>




























<script> 



function update(){
document.location='./update.php';
}



function profile(){
document.location='./profile.php';
}



function viewh(){
document.location='./viewh.php';
}

function vr(){
document.location='./vr.php';
}


function changer(){
document.location='./appl.php';
}

function app(){
document.location='./stat.php';
}

function lr(){
document.location='./lr.php';
}

function logout(){
document.location='./home.html';
}
</script>





