<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$value='none';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM `casualleave` WHERE `tutor`='$value'";
$result = $conn->query($sql);
	echo $result->num_rows;
?>