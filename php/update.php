<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="navi.css">
<style>


table { 
   margin-left: 12%;
    padding: 0px 300px;
    text-align: left;
width: 100%;
}

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

 <li><a href="" onmousedown = "profile()">PROFILE</a></li>
  <li><a class="active" href="" onmousedown = "update()">UPDATE PROFILE</a></li>
<li><a  href="" onmousedown = "viewh()">VIEW HOSTELITES</a></li>
  <li><a  href="" onmousedown = "vr()">VACANT ROOMS </a></li>
  <li><a href="" onmousedown = "changer()">CHANGE ROOM</a></li>
<li><a  href="" onmousedown = "app()">APPLICATION STATUS</a></li>
   <li><a href=""  onmousedown = "lr()">LEAVE ROOM</a></li>
 <li style="float:right"><a class="active" href="logout.html" onmousedown = "logout()">Logout</a></li>
</ul>
</div>







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


</script>

<body>
<form form action="" method="post" name="update" onsubmit="">

<?php



session_start();




// Create connection
$con = mysqli_connect("localhost","root","");


mysqli_select_db($con,"mgm");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$semail=$_SESSION["user"];


$sql = "SELECT name,address,gender,dob,mob FROM hosteldb WHERE email='$semail'";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


echo '
<table cellpadding="8" width="70%"  align="center"
cellspacing="12">

<tr>
<td colspan=1>
<font size=4><center><b>Student Update Form</b></center></font>
</td>
</tr>

<tr>
<td>Name</td>
<td><input type=text name="name" id="name" size="30" value="'.$row["name"]. '"></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" name="address"
id="personaladdress" size="30" value="'.$row["address"].'"></td>
</tr>
';
if($row["gender"] == "male")
{ echo '<tr>
<td>gender</td>
<td><input type="radio" name="gender" value="male" size="10" checked>Male
<input type="radio" name="gender" value="Female" size="10">Female</td>
</tr>';
}else
{ echo '<tr>
<td>gender</td>
<td><input type="radio" name="gender" value="male" size="10">Male
<input type="radio" name="gender" value="Female" size="10" checked>Female</td>
</tr>';
}

echo '</tr>


<tr>
<td>DOB</td>
<td><input type="text" name="dob" id="dob" size="30" value="'.$row["dob"].'"></td>
</tr>

<tr>
<td>MobileNo</td>
<td><input type="text" name="mobile" id="mobile" size="30" value="'.$row["mob"].'"></td>
</tr>

</table>
<tr>';
mysqli_close($con);
?>

<center><td1><input type="submit" name="update"value="update"></td1></center>


</tr>
</form>
</body>

</html>

 <?php
if(isset($_POST["update"]))
{

$n=$_POST["name"];
$ad=$_POST["address"];
$gen=$_POST["gender"];
$dob=$_POST["dob"];
$mb=$_POST["mobile"];








// Create connection
$conn = mysqli_connect("localhost","root","");

mysqli_select_db($conn,"mgm");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$semail=$_SESSION["user"];
$sql = "UPDATE hosteldb SET name='$n',address='$ad',gender='$gen',DOB='$dob',mob='$mb' WHERE email='$semail'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
echo "<script>document.location='./regsuccess.php';</script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
};


mysqli_close($conn);

}
?> 



