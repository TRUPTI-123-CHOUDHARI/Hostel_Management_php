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
#appl{margin-left:12%;}

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
a2{
line-height: 400%;font-size: 20px;}
selelct{width:20px;}
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
  <li><a href="" class="active" onmousedown = "changer()">CHANGE ROOM</a></li>
<li><a  href="" onmousedown = "app()">APPLICATION STATUS</a></li>
   <li><a href=""  onmousedown = "lr()">LEAVE ROOM</a></li>
 <li style="float:right"><a class="active" href="logout.html" onmousedown = "logout()">Logout</a></li>
</ul>

</div>




<form action="" method="post">
<div id="appl" align="center">
<a2> <u>SELECT </u></a2>
<br><a2> BUILDING </a2>
<select name="build" >
<option value="101">101</option>
<option value="102">102</option>

</select>
<br><a2> FLOOR </a2>
<select name="floor" >
<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
</select>


<br><a2> ROOM </a2>
<select name="room">
<option value="1">1</option>
<option value="2">2</option>


</select>

<br><a2> BED </a2>
<select name="bed">
<option value="1">1</option>
<option value="2">2</option>
</select>


<p><input type="submit" name="submit" value="APPLY"></p>
</br>
</div>
</form>
</body>
</html>

<?php



session_start();
$semail=$_SESSION["user"];

if(isset($_POST["submit"]))
{


$var4 = $_POST['build'];
$var1 = $_POST['floor'];
$var2 = $_POST['room'];
$var3 = $_POST['bed'];
$em="123";
$stat="Not Reviewed";

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"mgm");


$sql1 = "SELECT email FROM register where build='$var4' AND floor= '$var1' AND room ='$var2'AND bed='$var3'";
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result);
$ret=$row["email"];

If ($ret == ""){



$quer=mysqli_query($con,"insert into application (email,build,floor,room,bed,status) values ('$semail','$var4','$var1','$var2','$var3','$stat')");
if(!$quer){
echo mysqli_error($con);
}else {
	echo "<center><h2 style='color:green'>APPLICATION SEND </h2></center>";
};

}else {
	echo "<center><h2 style='color:red'>THIS BED IS ALREADY BOOKED</h2></center>";
};
mysqli_close($con);
}
?>




























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





