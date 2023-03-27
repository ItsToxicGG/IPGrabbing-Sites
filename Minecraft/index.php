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
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Minecraft Website</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <a href="#">Home - Current one</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>
  <main>
    <div class="container">
      <h1>Welcome to the Minecraft Website!</h1>
      <p>Here you'll find all sorts of information about Minecraft, including news, updates, and tips and tricks for playing the game.</p>
    </div>
  </main>
  <footer>
    <div class="container">
      <p>&copy; 2023 Minecraft Website. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
