<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create New Election</title>
<style>
  /* CSS styles */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    background-image: url('555.jpg');
  }
  .container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    background-image: url('222.jpg');
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    text-align: center;
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
  .form-group input[type="text"],
  .form-group input[type="date"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .form-group select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .btn {
    display: inline-block;
    padding: 8px 16px;
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
    <h1>Create New Election</h1>
    <form id="createElectionForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label for="electionType">Election Type:</label>
        <select id="electionType" name="electionType" required>
          <option value="">Select Election Type</option>
          <option value="Presidential">Presidential</option>
          <option value="Parliamentary">Parliamentary</option>
          <option value="Local Government">Local Government</option>
          <!-- Add more election types as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="electionDate">Election Date:</label>
        <input type="date" id="electionDate" name="electionDate" required>
      </div>
      <div class="form-group">
        <label for="eligibleVoters">Eligible Voters:</label>
        <input type="text" id="eligibleVoters" name="eligibleVoters" placeholder="Enter eligible voters (e.g., registered voters)">
      </div>
      <button type="submit" class="btn">Create Election</button>
    </form>
    <?php
    // PHP code for handling form submission and database interaction
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $electionType = $_POST['electionType'];
        $electionDate = $_POST['electionDate'];
        $eligibleVoters = $_POST['eligibleVoters'];

        // Connect to the database
        $servername = "localhost";
        $username = "root"; //  database username
        $password = ""; //  database password
        $dbname = "online_voting_management_system";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to insert data into the database
        $sql = "INSERT INTO elections (election_type, election_date, eligible_voters) VALUES ('$electionType', '$electionDate', '$eligibleVoters')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>New election created successfully!</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close database connection
        $conn->close();
    }
    ?>
  </div>
</body>
</html>
