<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Party Registration</title>
<style>
  /* CSS styles */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
  }
  .container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  form {
    margin-top: 20px;
  }
  .form-group {
    margin-bottom: 20px;
  }
  .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  .form-group input[type="text"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .btn {
    padding: 8px 16px;
    border: none;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .btn:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
  <div class="container">
    <h1>Party Registration</h1>
    <form id="partyRegistrationForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label for="partyName">Party Name:</label>
        <input type="text" id="partyName" name="partyName" required>
      </div>
      <div class="form-group">
        <label for="leaderName">Leader Name:</label>
        <input type="text" id="leaderName" name="leaderName" required>
      </div>
      <div class="form-group">
        <label for="foundedYear">Founded Year:</label>
        <input type="text" id="foundedYear" name="foundedYear" required>
      </div>
      <div class="form-group">
        <label for="ideology">Ideology:</label>
        <input type="text" id="ideology" name="ideology" required>
      </div>
      <button type="submit" class="btn">Register Party</button>
    </form>
    
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection parameters
        $servername = "localhost"; // Change this to your database server name
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $database = "online_voting_management_system"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data and sanitize
        $party_name = $_POST['partyName'];
        $leader_name = $_POST['leaderName'];
        $founded_year = $_POST['foundedYear'];
        $ideology = $_POST['ideology'];

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO parties (party_name, leader_name, founded_year, ideology) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $party_name, $leader_name, $founded_year, $ideology);

        // Execute SQL statement
        if ($stmt->execute() === TRUE) {
            echo "<p>New record created successfully</p>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
  </div>
</body>
</html>
