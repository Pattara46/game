<?php header('Access-Control-Allow-Origin: *');
$con=mysqli_connect("localhost","test","09042546","mydatabase");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$username = $_GET['fname'];
$password = $_GET['fpass'];
$qz = "SELECT id FROM members where username='".$username."' and password='".$password."'" ; 
$qz = str_replace("\'","",$qz); 
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result))
{
echo $row['id'];
}
mysqli_close($con);
?>