<?php
session_start();
$uname = '';
if (!isset($_SESSION['username'])){
    $r = rand(1,999);
    $uname = "Guest_User" . $r;
    $_SESSION['username'] = $uname;
}else{
    $uname = $_SESSION['username'];
}
$msg =  str_replace("'","''",$_REQUEST['msg']);
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
    $counter = 0;
    while($row = $result->fetch_assoc()) {
        if ($counter % 2 == 0){
            echo "<span style='color:#c4f7ff;'>" . "* " . "[" . $row["username"]. "]: " . $row["msg"] . "</span>" . "<br>";
        }else {
            echo "<span style='color:white;'>" . "* " . '[' . $row["username"] . "]: " . $row["msg"] . "</span>" . "<br>";
        }
        $counter ++;
    }
}
