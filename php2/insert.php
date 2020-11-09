<body>
<div id="interface">
<h1></h1>
<?php include "connect.php";
$vardas=$_POST['vardas'];
$epastas=$_POST['epastas'];
$kam=$_POST['kam'];
$data=date('Y-m-d H:i:s');
$ip=$_SERVER['REMOTE_ADDR'];
$zinute=$_POST['zinute'];
$sql ="INSERT INTO naudotojai (vardas, epastas, kam, data, ip, zinute) VALUES ('$vardas', '$epastas', '$kam', '$data', '$ip', '$zinute')";
$conn->query($sql) or die(mysqli_error());
$conn->close();
echo "<p>Įrašas išsaugotas</p>"; ?>
</div>
</body>