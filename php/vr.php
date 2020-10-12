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
  <li><a href="" onmousedown = "update()">UPDATE PROFILE</a></li>
<li><a  href="" onmousedown = "viewh()">VIEW HOSTELITES</a></li>
  <li><a class="active" href="" onmousedown = "vr()">VACANT ROOMS </a></li>
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
function logout(){
document.location='./home.html';
}

</script>



 <?php




session_start();


$conn = mysqli_connect("localhost","root","");


mysqli_select_db($conn,"mgm");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register where email=''";
$result = mysqli_query($conn, $sql);


echo "<center><th>"; echo" VACANT ROOMS AVAILABLE"; echo "</th></center>";
echo "<table  border = 1 cellpadding = 15>";

echo "<tr>";

echo "<th>";echo "build"; echo"</th>";
echo "<th>";echo "floor"; echo"</th>";
echo "<th>";echo"room"; echo"</th>";
echo "<th>";echo "bed"; echo"</th>";
echo "</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {



echo "<td>";echo $row["build"]; echo"</td>";
echo "<td>";echo $row["floor"]; echo"</td>";
echo "<td>";echo $row["room"]; echo"</td>";
echo "<td>";echo $row["bed"]; echo"</td></tr>";

    }
 
}
else {
    echo "<td> No vacant</td>";
echo "<td>No vacant</td>";
echo "<td>No vacant</td>";
echo "<td>No vacant</td></tr>";
}

echo"</table>";
mysqli_close($conn);
?> 

