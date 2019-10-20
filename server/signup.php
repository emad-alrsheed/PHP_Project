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
} else {
    echo "Connected successfully";
}

if (isset($_POST['signup'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (first_name, last_name, email, username, password)
            VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";

    echo $sql;
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['user'] = $first_name . ' ' . $last_name;
        echo "New record created successfully";
        header("Location: ../dashbaord.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

