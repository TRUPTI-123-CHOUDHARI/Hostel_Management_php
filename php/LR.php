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
    padding:3px; 
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
    padding: 10px 20px;
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

 <li><a href="" onmousedown = "profile()">PROFILE</a></li>
  <li><a href="" onmousedown = "update()">UPDATE PROFILE</a></li>
<li><a  href="" onmousedown = "viewh()">VIEW HOSTELITES</a></li>
  <li><a  href="" onmousedown = "vr()">VACANT ROOMS </a></li>
  <li><a href="" onmousedown = "changer()">CHANGE ROOM</a></li>
<li><a  href="" onmousedown = "app()">APPLICATION STATUS</a></li>
   <li><a class="active" href=""  onmousedown = "lr()">LEAVE ROOM</a></li>
 <li style="float:right"><a class="active" href="logout.html" onmousedown = "logout()">Logout</a></li>
</ul>



</div>



<body>




<?php


	echo "<center><h2 style='color:green'>PRESS DELETE TO LEAVE THE HOSTEL ROOM </h2></center>";

       
session_start();
$semail=$_SESSION["user"];

if(isset($_POST["submit1"]))
{


echo "<script>document.location='./profile.php';</script>";


}

if(isset($_POST["submit"]))
{



$conn = mysqli_connect("localhost","root","");


mysqli_select_db($conn,"mgm");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE register SET name='',gender='',email='' WHERE email='$semail'";


$sql2 = "DELETE FROM application where email='$semail'";
$result = mysqli_query($conn, $sql2);


$sql1 = "DELETE FROM hostelDB where email='$semail'";
$result = mysqli_query($conn, $sql1);


if (mysqli_query($conn, $sql)) {
    echo  "<script>document.location='./delacc.php';</script>";

} else {
    echo "Error deleting record: " . mysqli_error($conn);
} 


mysqli_close($conn);
}



echo'

<div id="appl" align="center">

<a5>  DO YOU WANT TO DELETE ACCOUNT </a5><br>
 
  <form action="" method="post"><p><input type="submit" name="submit" value="DELETE"></p>

<form action="" method="post"><p><input type="submit" name="submit1" value="CANCEL"></p>

</form></div>';

?>



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





                                                           