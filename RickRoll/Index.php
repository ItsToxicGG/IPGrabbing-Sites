<?php
// Start the session
session_start();

// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDatabasename";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user has visited the site before
if (!isset($_SESSION['visited'])) {
    // If not, save their IP address in the session
    $_SESSION['visited'] = true;

    // Get the user's IP address using a third-party API
    echo '<script src="https://api.ipify.org?format=jsonp&callback=getIP"></script>';
    echo '<script>
            function getIP(response) {
                var ip = response.ip;
                window.location.href = "saveip.php?ip=" + ip;
            }
          </script>';
}

// If the user has visited the site before, show them the main page
?>
<html>
<head>
    <title>My Website</title>
</head>
<body>
    <h1>Hello </h1>
    <p>Edit this! ?></p>
</body>
</html>
