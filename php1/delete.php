<?php
session_start();
if(!$_SESSION['uname'])
{
    die("Not admin.");
}
?>
<body>
<div id="interface">
<h1>Gimtadieniai</h1>
<?php include "db.inc";
$id=$_GET['id'];
$sql="DELETE FROM gimtadieniai WHERE
id='$id'";
$conn->query($sql) or die(mysqli_error());
$conn->close();
echo "<p>Įrašas pašalintas</p>"; ?>
<form method="POST" action="naujas.php">
<input type="submit" value="Naujas įrašas"></form>
<form action="meniu.php" method="post"><br>
<input type="submit" value="Grįžti į meniu"></form>
</div>
</body>