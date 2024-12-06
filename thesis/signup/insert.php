<?php 
$servername = "localhost";
$username ="root";
$password = "";
//database name
$dbname = 'user';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =$_POST['name'];
    $student = $_POST['student'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $rfid = $_POST['rfid'];
    //database table name
    $sql = "INSERT into students (Name, Student, Birthday, Email, RFID) VALUES ('$name','$student','$birthday','$email','$rfid')";

    if ($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: " .$sql. "<br>" .$conn->error;
    }
}
?>