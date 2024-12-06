<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failes: " .$conn->connect_error);
}

$sql = "SELECT id, name, student, birthday, email, rfid FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID: ".$row["id"]." - Name: ".$row["name"]. " - Student No.: ".$row["student"]. " - Birthday: ".$row["birthday"]. " - Email: ".$row["email"]. " - RFID: ".$row["rfid"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>