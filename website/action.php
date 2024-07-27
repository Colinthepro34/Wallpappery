<?php
 
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "wallpapery";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO user VALUES
    ('$name', '$email', '$message')";
 
if ($conn->query($sql) === TRUE) {
    header("Location: http://127.0.0.1:5500/index2.html");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>