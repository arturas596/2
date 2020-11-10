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
<h2>Paieškos rezultatai</h2>
<?php
$laukas=$_POST['laukas'];
$raktas=$_POST['raktas'];
if (!$raktas) {
echo '<p>Jūs neįrašėte raktažodžio.<br>
Grįžkite atgal ir bandykite vėl!</p>';
}
else {
include "db.inc";
$sql="SELECT * FROM gimtadieniai WHERE $laukas like '%$raktas%'";
$result= $conn->query($sql) or die(mysqli_error());
$kiek= mysqli_num_rows($result);
if ($kiek==0) echo "<p>Duomenų nerasta.</p>";
else {
echo "<table><tr><th>Vardas</th>
<th>Gimimo data</th></tr>";
while ($eil=mysqli_fetch_array($result))
printf("<tr><td>%s</td><td>%s</td></tr>",
$eil['vardas'], $eil['data']);
echo "</table>";
$conn->close();}
}
?>
<form action="rasti.php" method="post"><br>
<input type="submit" value="Grįžti atgal">
</form>
</div>
</body>
</html>