<?php
// Retrieve form data
$name = $_POST['name'];
$subject = $_POST['subject'];

$email = $_POST['email'];
$message = $_POST['message'];


// Connect to the database
$host = 'db';
$user = 'root';
$pass = '12345';
$db = 'shrinoj';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO  addc(name, subject,email,message) VALUES ('$name', '$subject','$email','$message')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
