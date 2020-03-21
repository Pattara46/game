<?php header('Access-Control-Allow-Origin: *');

$mysqli = new mysqli('localhost', 'test', '09042546', 'mydatabase');
if ($mysqli ->connect_errno) {
 die('Could not connect: ' . mysqli_connect_errno());;
}

$id = $_GET['fid']; 
$score = $_GET['fscore']; 

$query = $mysqli->query("SELECT * FROM tbscore WHERE id = $id");
$result = $mysqli->query("UPDATE members SET score3 = $score WHERE id = $id");

$row = $query->fetch_array();
echo $row['id'];

$mysqli->close();
?>