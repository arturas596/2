<!doctype html>
<html>
<head><link rel="stylesheet" type="text/css" href="stilius.css">
<title>...</title>
<meta charset="utf-8">
</head>
<body>
<h1>Kursai</h1>
<form name="Filter" method="POST">
    From:
    <input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />
    <br/>
    To:
    <input type="date" name="dateTo" value="<?php echo date('Y-m-d'); ?>" />
    <br/>
    Filter by code:
    <input type="text" name="code"/>
    <input type="submit" name="submit" value="Submit"/>
</form>

<?php
//echo $_POST['code'];
$new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
echo "nuo ".$new_date ." iki ";
$link='https://www.lb.lt/lt/currency/daylyexport/?csv=1&class=Eu&type=day&date_day=';
$link=$link . $new_date;
$kursai = file($link);
$kiek=count($kursai);
for ($i=0; $i<$kiek; $i++) {
$line[$i]=explode(';',$kursai[$i]);
}

$new_date2 = date('Y-m-d', strtotime($_POST['dateTo']));
echo $new_date2;
$link2='https://www.lb.lt/lt/currency/daylyexport/?csv=1&class=Eu&type=day&date_day=';
$link2=$link2 . $new_date2;
$kursai2 = file($link2);
for ($i=0; $i<$kiek; $i++) {
$line2[$i]=explode(';',$kursai2[$i]);
}
?>
<table>
<tr>
    <th> <?php echo $line2[0][0];?></th>
	<th> <?php echo $line2[0][1];?></th>
	<th> <?php echo $line2[0][2];?></th>
    <th> <?php echo "Pokytis"?></th>
	<th> <?php echo $line2[0][3];?></th>
	</tr>
	<?php
    for ($i=1; $i < $kiek; $i++) {
       $cod =str_replace('"', '',$line2[$i][1]);
    if($cod==$_POST['code']||$_POST['code']==null)
	{
    echo "<tr><td>" ,$line2[$i][0], "</td>";
    echo "<td>" ,$line2[$i][1], "</td>";
    echo "<td>" ,$line2[$i][2], "</td>";
    $val1=doubleval(str_replace(',', '.', str_replace('"', '', $line2[$i][2])));
    $val2=doubleval(str_replace(',', '.', str_replace('"', '', $line[$i][2])));
    $santykis=$val1-$val2;
	echo "<td>" ,round($santykis, 3), "</td>";
	echo "<td>" ,$line2[$i][3], "</td></tr>";
    }}
?>
</table>
</center>
</body>
</html> 

