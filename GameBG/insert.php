<?php
$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamebg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO logs (username, msg) VALUES ('$uname', '$msg')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT username, msg FROM logs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "-" . $row["username"]. ": " . $row["msg"] . "<hr>";
    }
}
