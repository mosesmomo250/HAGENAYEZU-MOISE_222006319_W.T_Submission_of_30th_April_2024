<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        /* CSS styles */
        body {
            font-family: "Fira Sans", Helvetica, Arial, sans-serif;
            background-color: #67a1d4;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-image: url(vote.png);
        }

        .container {
            position: relative;
        }

        .role-selector {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .role-option label {
            margin-right: 10px;
        }

        .submit-btn {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <div class="form-holder">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="text" class="input" placeholder="username" name="username" required />
                    <input type="email" class="input" placeholder="Email" name="email" required />
                    <input type="password" class="input" placeholder="Password" name="password" required />
                    <div class="role-selector">
                        <div class="role-option">
                            <input type="radio" id="voter" name="role" value="voter">
                            <label for="voter">Voter</label>
                        </div>
                        <div class="role-option">
                            <input type="radio" id="admin" name="role" value="admin">
                            <label for="admin">Admin</label>
                        </div>
                        <div class="role-option">
                            <input type="radio" id="candidate" name="role" value="candidate">
                            <label for="candidate">Candidate</label>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn">Sign up</button>
                </form>
                <!-- Added anchor tag -->
                <a href="login.html" class="submit-btn">Log in instead</a>
            </div>
        </div>
        <!-- Other parts of your HTML form -->
    </div>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "online_voting_management_system";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Form submission handling
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        // Insert data into database
        $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";

        if ($conn->query($sql) === TRUE) {
            // Redirect based on role
            switch ($role) {
                case 'admin':
                    header("Location: admin_dashboard.html");
                    break;
                case 'voter':
                    header("Location: voter_dashboard.html");
                    break;
                case 'candidate':
                    header("Location: candidate_dashboard.html");
                    break;
                default:
                    // Handle default case or error
                    break;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>
</body>
</html>
