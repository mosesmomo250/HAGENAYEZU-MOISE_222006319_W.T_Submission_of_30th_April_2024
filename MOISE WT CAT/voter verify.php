<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vote Verification</title>
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
    <h1>Vote Verification</h1>
    <form id="voteVerificationForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label for="verificationCode">Verification Code:</label>
        <input type="text" id="verificationCode" name="verificationCode" required>
      </div>
      <button type="submit" class="btn">Verify Vote</button>
    </form>
    <div id="verificationResult">
    <?php
    // PHP code for handling form submission and database interaction
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if verification code is set
        if (isset($_POST['verificationCode'])) {
            // Retrieve verification code from form
            $verificationCode = $_POST['verificationCode'];

            // Connect to the database
            $servername = "localhost";
            $username = "root"; // database username
            $password = ""; //my database password
            $dbname = "online_voting_management_system";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare SQL statement to check if verification code exists in the database
            $sql = "SELECT * FROM vote_verification WHERE verification_code = '$verificationCode'";
            $result = $conn->query($sql);

            // Check if verification code exists
            if ($result->num_rows > 0) {
                // Verification successful
                echo "Your vote has been recorded accurately.";
            } else {
                // Verification failed
                echo "There was an issue verifying your vote. Please try again or contact support.";
            }

            // Close database connection
            $conn->close();
        } else {
            // If verification code is not set, display an error message
            echo "Verification code is not set.";
        }
    }
    ?>
    </div>
  </div>
</body>
</html>
