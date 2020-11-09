<?php
include "db.inc";
$sql="CREATE TABLE gimtadieniai(id INT(6) NOT NULL
AUTO_INCREMENT PRIMARY KEY, vardas VARCHAR(30),data
DATE)";
if ($conn->query($sql) ) {
 echo "Duomenų lentelė sukurta";
} else {
 echo "Error creating table: " . $conn->error;
}
$conn->close();?>
