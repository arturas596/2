<H1>Žinučių sistema</H1>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
<?php include "connect.php";
?>

<table class="table table-striped"><tr>
<th>Nr.</th>
<th>Kas Siuntė</th>
<th>Gavėjas</th>
<th>Data(IP)</th>
<th>Žinutė</th></tr>
<?php
$sql="SELECT * FROM naudotojai";
$result= $conn->query($sql) or die(mysqli_error());
while ($eil=mysqli_fetch_array($result))
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s (%s)</td><td>%s</td></tr>",
$eil['vardas'], $eil['epastas'], $eil['kam'], $eil['data'], $eil['ip'],$eil['zinute']);
?>
</table>
<h1>Įveskite naują žinutę</h1>
<div id="interface">
<form method="POST" action="insert.php">
<p><label>Siuntėjo Vardas:</label>
<input type="text" name="vardas" required></p>
<p><label>Siuntėjo e-paštas:</label>
<input type="text" name="epastas" required></p>
<p><label>Kam skirta:</label><br>
<input type="text" name="kam" required></p>
<p><label>Žinutė:</label><br>
<input type="text" name="zinute" required></p>
<input type="submit" value="Siųsti">
</form>
</div>




