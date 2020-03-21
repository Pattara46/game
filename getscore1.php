<?php header('Access-Control-Allow-Origin: *');

$mysqli = new mysqli('localhost', 'test', '09042546', 'mydatabase');
if ($mysqli ->connect_errno) {
 die('Could not connect: ' . mysqli_connect_errno());;
}

$id = $_GET['fid']; 

$query = $mysqli->query("SELECT * FROM members WHERE id = $id");

$row = $query->fetch_array();
echo $row['score1'];

$mysqli->close();