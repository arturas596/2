<?php
$servername = "localhost";
$username = "JIA";
$password = "abc123";
$db_name="gimimo_diena";
// Create connection
$conn = new mysqli($servername, $username,
$password,$db_name);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";