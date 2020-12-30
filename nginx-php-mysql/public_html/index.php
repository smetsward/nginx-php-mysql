
<!DOCTYPE html>
<html>
<body>
TEST TEST 
<?php

$conn = new mysqli("mysql", "root", "password", "stt_db");
// Check connection
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

$sql = "SELECT Voornaam,achernaam FROM `naam`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Naam: " . $row["Voornaam"]. " " . $row["achernaam"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


</body>
</html>

