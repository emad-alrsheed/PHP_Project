<?php

$servername = "localhost";
$username = "root";
$password = "harfard25";
$database = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if (isset($_POST['login'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO users (first_name, last_name, email, username, password)
VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../dashbaord.html")
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

$conn->close();

