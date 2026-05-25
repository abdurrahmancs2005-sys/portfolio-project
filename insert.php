<?php

include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO users (name, email, message)
        VALUES ('$name', '$email', '$message')";

if(mysqli_query($conn, $sql)){
    echo "Data Saved Successfully ✔️";
} else {
    echo "Error: " . mysqli_error($conn);
}

?>