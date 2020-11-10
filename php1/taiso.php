<?php
session_start();
if(!$_SESSION['uname'])
{
    die("Not admin.");
}
?>
<div id="interface">
<h1>Naujas įrašas</h1>
<?php $id=$_GET['id'];
include "db.inc";
$sql="SELECT * FROM gimtadieniai WHERE id='$id'";
$result= $conn->query($sql) or die(mysqli_error());
$eil=mysqli_fetch_array($result);
$vardas=$eil['vardas'];
$data=$eil['data'];
?>
<form method="POST" action="update.php">
<p><label>Vardas ir pavardė:</label><br>
<input type="text" name="vardas" required value="<?= $vardas ?>"></p>
<p><label>Gimimo data:</label><br>
<input type="date" name="data" required value="<?= $data ?>"></p>
<input type="hidden" value="<?= $id ?>"
name="id">
<input type="submit" value="Įrašyti">
</form>
<form action="meniu.php" method="post"><br>
<input type="submit" value="Grįžti į meniu">
</form>
</div>