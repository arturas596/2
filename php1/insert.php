$sql = "INSERT INTO gimtadieniai (vardas,
data)
VALUES ('John','2018-03-02')";
//galima tokią eilutę kartoti keliems įrašams
//įvesti; ID įvedamas automatiškai
if ($conn->query($sql) === TRUE) {
 echo "New records created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn-
>error;
}
