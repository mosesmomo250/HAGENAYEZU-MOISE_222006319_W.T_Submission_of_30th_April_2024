<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Candidate Registration</title>
<style>
  body {
    font-family: sans-serif;
  }
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
  }
  .section {
    margin-bottom: 20px;
  }
  .section-header {
    font-size: 18px;
    margin-bottom: 10px;
  }
  .data-row {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-bottom: 5px;
  }
  .data-label {
    width: 150px;
  }
  select {
    width: 300px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
</style>
</head>
<body>
  <div class="container">
    <h1>Candidate Registration</h1>
    <form id="candidateRegistrationForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="section">
        <h2 class="section-header">Personal Data</h2>
        <div class="data-row">
          <div class="data-label">Surname:</div>
          <input type="text" id="surname" name="surname" required>
        </div>
        <div class="data-row">
          <div class="data-label">Other Names:</div>
          <input type="text" id="otherNames" name="otherNames" required>
        </div>
        <div class="data-row">
          <div class="data-label">Date of Birth:</div>
          <input type="date" id="dob" name="dob" required>
        </div>
        <div class="data-row">
          <div class="data-label">Position:</div>
          <select id="position" name="position" required>
            <option value="">Select Position</option>
            <option value="President">President</option>
            <option value="District Leader">District Leader</option>
            <option value="Prime Minister">Prime Minister</option>
            <!-- Add other necessary positions here -->
          </select>
        </div>
      </div>
      <div class="section">
        <h2 class="section-header">Other Data</h2>
        <div class="data-row">
          <div class="data-label">State of Origin:</div>
          <input type="text" id="stateOfOrigin" name="stateOfOrigin" required>
        </div>
        <div class="data-row">
          <div class="data-label">Voter's Number:</div>
          <input type="text" id="votersNumber" name="votersNumber" required>
        </div>
        <div class="data-row">
          <div class="data-label">Political Party:</div>
          <input type="text" id="politicalParty" name="politicalParty" required>
        </div>
      </div>
      <button type="submit">Submit</button>
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
        $surname = $_POST['surname'];
        $otherNames = $_POST['otherNames'];
        $dob = $_POST['dob'];
        $position = $_POST['position'];
        $stateOfOrigin = $_POST['stateOfOrigin'];
        $votersNumber = $_POST['votersNumber'];
        $politicalParty = $_POST['politicalParty'];

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO candidates (surname, other_names, date_of_birth, position, state_of_origin, voters_number, political_party) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $surname, $otherNames, $dob, $position, $stateOfOrigin, $votersNumber, $politicalParty);

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
