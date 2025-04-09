<?php
// Database connection info
$servername = "localhost";
$username = "your_db_user";
$password = "your_db_password";
$dbname = "your_db_name";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into contact table
$sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "Message received. Thank you!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
