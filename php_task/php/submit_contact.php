<?php
include 'config.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];

$sql = "INSERT INTO contacts (first_name, last_name, phone_number, email) VALUES ('$firstName', '$lastName', '$phoneNumber', '$email')";

if ($conn->query($sql) === TRUE) {
    header('Location: ../confirmation.php'); // Redirect to confirmation page
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
