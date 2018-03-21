
<html>
<body>
<img id="logo" src="https://egci313quizbykik.herokuapp.com/images/greenman.png" />
<br/>
<br/>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egci313quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from stdinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Weight: " . $row["weight"]. "-Height: " . $row["height"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

