<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "organic_oasis"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $full_name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO user (full_name, email, password, phone) VALUES ('$full_name', '$email', '$password', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: Oasis login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
