<?php
// Connect to the database
$servername = "localhost";
$username = "stats";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get IP address of user
$ip_address = $_SERVER['REMOTE_ADDR'];

// Insert IP address into database
$sql = "INSERT INTO ips (ip_address) VALUES ('$ip_address')";
if ($conn->query($sql) === TRUE) {
    $response = array('status' => 'success', 'message' => 'IP address saved.');
} else {
    $response = array('status' => 'error', 'message' => 'Error saving IP address: ' . $conn->error);
}

// Send response back to JavaScript
echo json_encode($response);
$conn->close();
?>