<?php header('Access-Control-Allow-Origin: *');

$mysqli = new mysqli('localhost', 'test', '09042546', 'mydatabase');
if ($mysqli ->connect_errno) {
 die('Could not connect: ' . mysqli_connect_errno());;
}

$username = $_GET['fname'];
$password = $_GET['fpass'];

$query = $mysqli->query("SELECT * FROM members");
$result = $mysqli->query("INSERT INTO members(username,password) VALUES('$username','$password')");

$mysqli->close();
?>