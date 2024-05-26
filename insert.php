<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$faculty = $_POST['faculty'];
$address = $_POST['address'];
$gender = $_POST['gender'];

// Insert data into the database
$sql = "INSERT INTO students (name, email, phone, faculty, address, gender) VALUES ('$name', '$email', '$phone', '$faculty', '$address', '$gender')";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



// Close connection
$conn->close();
?>
