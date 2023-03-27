<?php
// Start the session
session_start();

// Get the IP address from the URL parameter
$ip_address = $_GET['ip'];

// Save the IP address in the session
$_SESSION['ip_address'] = $ip_address;

// Save the IP address in the database
$sql = "INSERT INTO visitors (ip_address) VALUES ('".$ip_address."')";

if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>