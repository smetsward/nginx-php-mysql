<?php

$conn = new mysqli("mysql", "root", "password", "stt_db");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Voornaam, achternaam FROM naam";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['Voornaam']."&lt;br>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>




<!DOCTYPE html>
<html>
<body>
TEST TEST 
<?php
$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "stt_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Voornaam, achternaam FROM stt_db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Naam: " . $row["Voornaam"]. " " . $row["achternaam"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>


