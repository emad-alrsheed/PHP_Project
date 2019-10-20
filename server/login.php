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
//    echo "Connected successfully";
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";

//    echo '<br>$sql<br>';

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $result = $result->fetch_assoc();
        session_start();
        $_SESSION['user'] = $result['first_name'] . ' ' . $result['last_name'];

        header('Location: ../dashbaord.php');
    } else {
        echo "<br>Email and Password do not match";
    }

}

$conn->close();

