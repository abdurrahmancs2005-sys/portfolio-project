<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "myportfolio";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO users (name, email, message)
VALUES ('$name', '$email', '$message')";

if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully";
} else {
    echo "Error";
}
?>