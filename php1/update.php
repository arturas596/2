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
$id=$_POST['id'];
$vardas=$_POST['vardas'];
$data=$_POST['data'];
$query="UPDATE gimtadieniai SET
vardas='$vardas', data='$data' WHERE id='$id'";
$conn->query($sql) or die(mysqli_error());
$conn->close();
echo "<p>Įrašas pataisytas</p>"; ?>
<form method="POST" action="naujas.php">
<input type="submit" value="Naujas įrašas"></form>
<form action="meniu.php" method="post"><br>
<input type="submit" value="Grįžti į meniu"></form>
</div>
</body>