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

<li><a class="active" href="" onmousedown = "profile()">APPLICATIONS RECIEVED</a></li>
<li><a  href="" onmousedown = "aviewh()">VIEW HOSTELITES</a></li>
  <li><a  href="" onmousedown = "avr()">VACANT ROOMS </a></li>
<li><a href="" onmousedown = "aapp()">APPLICATION STATUS</a></li>
  

  <li style="float:right"><a class="active" href="logout.html"onmousedown = "logout()">Logout</a></li>
</ul>

</div>



<style>


ul1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 120px;
    background-color: #f1f1f1;
    position: absolute;
    height: 100%;
    overflow: auto;
}

li a1 {
    display: block;
    color: #000;
width:110px;text-align:center;
    padding: 8px 5px;
    text-decoration: none;
}

li a1.active {
    background-color: #4CAF50;
    color: white;
}

li a1:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>



<body>
<form action="" method="post">
<div id="appl" align="center">
<p><input type="submit" name="submit" value="APPROVE">
<input type="submit" name="submit1" value="NOT APPROVE"></p>
</div>
</form>
</body>


</html>

<script> 



function update(){
document.location='./update.php';
}



function profile(){
document.location='./apprec.php';
}



function aviewh(){
document.location='./aviewh.php';
}

function avr(){
document.location='./avr.php';
}


function changer(){
document.location='./aappl.php';
}

function aapp(){
document.location='./astat.php';
}

function logout(){
document.location='./home.html';
}


</script>



 <?php




session_start();

$semail=$_SESSION["user"];

$conn = mysqli_connect("localhost","root","");


mysqli_select_db($conn,"mgm");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM application where status= 'not reviewed'";
$result = mysqli_query($conn, $sql);


echo "<center><th>"; echo" APPLICATION RECIVED"; echo "</th></center>";
echo "<table  border = 1 cellpadding = 15>";

echo "<tr>";
echo "<th>";echo "EMAIL"; echo"</th>";
echo "<th>";echo "BULDING"; echo"</th>";
echo "<th>";echo "FLOOR"; echo"</th>";
echo "<th>";echo"ROOM NO."; echo"</th>";
echo "<th>";echo "BED NO."; echo"</th>";

echo "</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
$row = mysqli_fetch_assoc($result);


echo "<td>".$row["email"]."</td>";
echo "<td>";echo $row["build"]; echo"</td>";
echo "<td>";echo $row["floor"]; echo"</td>";
echo "<td>";echo $row["room"]; echo"</td>";
echo "<td>";echo $row["bed"]; echo"</td></tr>";

$abu= $row["build"]; 
$afl= $row["floor"]; 
$aro=$row["room"]; 
$abe= $row["bed"]; 

    echo"</table>";


$as=$row["email"];

if(isset($_POST["submit"]))
{


$sql4 = "UPDATE register SET name='',gender='',email='' WHERE email='$as'";
$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_assoc($result4);



$sql5 = "UPDATE application SET status='ANOTHER ROOM ALLOCATED' WHERE email='$as' AND status= 'not reviewed'";
$result5 = mysqli_query($conn, $sql5);



$sql6 = "UPDATE application SET status='ALLOCATED TO OTHER STUDENT' WHERE build='$abu'and floor='$afl'and room='$aro'and bed='$abe'AND status= 'not reviewed'";

$result6 = mysqli_query($conn, $sql6);




$sql1 = "UPDATE application SET status='APPROVED' WHERE email='$as'and build='$abu'and floor='$afl'and room='$aro'and bed='$abe'AND status ='ANOTHER ROOM ALLOCATED'";
$result1 = mysqli_query($conn, $sql1);




$sql3 = "SELECT * FROM hosteldb WHERE email= '$as'";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);


$bu=$row["build"];
$fl=$row["floor"];
$ro=$row["room"];
$be=$row["bed"];
$ge=$row3["gender"];
$na=$row3["name"];


$sql2 = "UPDATE register SET email='$as',gender='$ge',name='$na' WHERE build='$bu'and floor='$fl'and room='$ro'and bed='$be'";
$result2 = mysqli_query($conn, $sql2);
echo "<script>document.location='./Apprec.php';</script>";
}
if(isset($_POST["submit1"]))
{
$sql1 = "UPDATE application SET status=' NOT APPROVED' WHERE email='$as'and build='$abu'and floor='$afl'and room='$aro'and bed='$abe'";
$result1 = mysqli_query($conn, $sql1);
echo "<script>document.location='./Apprec.php';</script>";

}
 

}
else {
    echo "<td> No more application</td>";
echo "<td>No more application</td>";
echo "<td>No more application</td>";
echo "<td>No more application</td>";
echo "<td>No more application</td></tr>";
}








mysqli_close($conn);

?> 

