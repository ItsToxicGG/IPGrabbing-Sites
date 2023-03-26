<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Connect to database
  $servername = "localhost";
  $username = "stats";
  $password = "";
  $dbname = "test";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get input values
  $person_name = $_POST["person_name"];
  $dating_person_name = $_POST["dating_person_name"];

  // Insert data into databaset
  $sql = "INSERT INTO dating (person_name, dating_person_name)
          VALUES ('$person_name', '$dating_person_name')";

  if (mysqli_query($conn, $sql)) {
    echo "Wonder who you picked?";
  } else {
    echo "Error inserting data: " . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);
}
?>