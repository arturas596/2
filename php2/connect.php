<?php
$conn = mysqli_connect('localhost','root','','test');
// Ar sėkminga?
if (!$conn) { die("Nepavyko prisijungti: " . mysqli_connect_error()); }
?>