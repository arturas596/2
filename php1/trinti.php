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
<?php
include "db.inc";
$sql="SELECT * FROM gimtadieniai";
$result= $conn->query($sql) or die(mysqli_error());
echo "<table><tr><th>Vardas</th><th>Gimimo
data</th><th>&nbsp;</th>
</tr>";
while ($eil=mysqli_fetch_array($result)) {
printf("<tr><td>%s</td><td>%s</td><td><a href=\"delete.php?id=%s\">Naikinti</a></td></tr>",
$eil['vardas'], $eil['data'],$eil['id']);
}
echo "</table>";
$conn->close();?>
<form action="meniu.php" method="post"><br>
<input type="submit" value="Grįžti į meniu"></form>
</div>
</body>