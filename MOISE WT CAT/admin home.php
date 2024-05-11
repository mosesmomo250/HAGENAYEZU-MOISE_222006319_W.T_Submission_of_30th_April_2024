<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('iiii.jpg'); /* Replace 'path/to/your/wallpaper.jpg' with the actual path to your wallpaper image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color:none; /* Add a semi-transparent white background to make the content more readable */
        }

        header {
            background-color:none;
            color: black;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            padding: 8px 16px;
            border-radius: 5px;
            background-color: #4CAF50;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #45a049;
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        button {
            margin: 10px;
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        button:focus {
            outline: none;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: auto;
        }

        footer p {
            margin: 5px 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1><b>Voting System</b></h1>
        <nav>
            <a href="admin ba.php" id="adminBallotsBtn">Admin Ballots</a>
            <a href="admin management.php" id="adminManagementBtn">Admin Management</a>
            <a href="approval candidates.php" id="approveCandidateBtn">Approve Candidate</a>
            <a href="approval party.php" id="approvePartyBtn">Approve Party</a>
            <a href="creating the election.php" id="createElectionBtn">Create Election</a>
            <a href="result in admin dashboard.php" id="viewResultsBtn">View Election Results</a>
            <a href="index.php" id="logoutBtn">Log Out</a>
        </nav>
    </header>

    <div class="container">
        <p><b>

            "Voting is a fundamental right and civic duty in democratic societies. It allows individuals to have a say in the governance of their communities, regions, and nations. Through voting, citizens can elect representatives who will make decisions on their behalf and shape public policies. It serves as a mechanism for expressing preferences, opinions, and values on various issues, ranging from social justice to economic policies. Moreover, voting provides a means for holding elected officials accountable for their actions and ensuring the principles of democracy are upheld. Overall, voting plays a crucial role in shaping the future and direction of societies, empowering individuals to participate in the democratic process and make their voices heard."</b></p>
    </div>
    <footer>
        <p>RN1, huye, Rwanda</p>
        <p>Email: hagenayezumoise@gmail.com</p>
        <p>Phone: +250 789 773 232</p>
        <p>
            <a href="https://www.facebook.com/hagenayezu moise">Facebook</a>
            <a href="https://www.twitter.com/moses_rwand">Twitter</a>
            <a href="https://www.instagram.com/moses_rwanda">Instagram</a>
        </p>
    </footer>
    <script>
        document.getElementById("adminBallotsBtn").addEventListener("click", function() {
            // Redirect or perform action for Admin Ballots
            console.log("Admin Ballots clicked");
        });

        document.getElementById("adminManagementBtn").addEventListener("click", function() {
            // Redirect or perform action for Admin Management
            console.log("Admin Management clicked");
        });

        document.getElementById("approveCandidateBtn").addEventListener("click", function() {
            // Redirect or perform action for Approve Candidate
            console.log("Approve Candidate clicked");
        });

        document.getElementById("approvePartyBtn").addEventListener("click", function() {
            // Redirect or perform action for Approve Party
            console.log("Approve Party clicked");
        });

        document.getElementById("createElectionBtn").addEventListener("click", function() {
            // Redirect or perform action for Create Election
            console.log("Create Election clicked");
        });

        document.getElementById("viewResultsBtn").addEventListener("click", function() {
            // Redirect or perform action for View Election Results
            console.log("View Election Results clicked");
        });

        document.getElementById("logoutBtn").addEventListener("click", function() {
            // Redirect or perform action for Log Out
            console.log("Log Out clicked");
        });
    </script>
</body>
</html>
