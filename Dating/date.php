<!DOCTYPE html>
<html>
<head>
  <title>Dating Site</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="other.css">
</head>
<body>
<nav>
    <ul>
      <li><a href="date.php">Date [current one]</a></li>
      <li><a href="index.php">Break up </a></li>
      <li><a href="support.php">Help and support</a></li>
    </ul>
  </nav>
  <form method="POST" action="save_names.php">
        <label for="person_name">Your Name:</label>
        <input type="text" id="person_name" name="person_name" required><br><br>

        <label for="dating_person_name">The person you dating Name:</label>
        <input type="text" id="dating_person_name" name="dating_person_name" required><br><br>

        <button type="submit">Save Names</button>
    </form>

  <br>
<br>
<br>

  
</body>
<footer>
    <p>&copy; 2023 Dating Corp By Toxic. All rights reserved.</p>
  </footer>
</html>
