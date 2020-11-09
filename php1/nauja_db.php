<?php
$servername = "localhost";
$username = "JIA";
$password = "abc123";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="CREATE DATABASE gimimo_diena DEFAULT CHARACTER SET
utf8 DEFAULT COLLATE utf8_lithuanian_ci";
$result=$conn->query($sql);
if($result) echo "Duomenų bazė sukurta.";
else echo mysqli_error();
$conn->close();
?>
