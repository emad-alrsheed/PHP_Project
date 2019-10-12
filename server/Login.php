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


if (isset($_POST['Login'])) {

    $username = $_POST['username'];

    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username ='$username' and password ='$password' ";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../Login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

$conn->close();
