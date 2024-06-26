<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('wallpaper.jpg'); /* Add the URL of your wallpaper */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .top-bar {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .search-bar {
            margin-left: auto; /* Pushes the search bar to the right */
            margin-right: 20px; /* Adds space between search bar and logout button */
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .logout-button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none; /* Remove default underline */
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        .dashboard {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            width: 300px;
        }

        .card a {
            display: block;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none; /* Remove default underline */
            text-align: center;
            margin-bottom: 10px;
        }

        .card a:hover {
            background-color: #0056b3;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="top-bar">
    <input type="text" class="search-bar" placeholder="Search...">
    <a href="index.php" class="logout-button">Log Out</a>
</div>

<div class="dashboard">
    <div class="card profile">
        <a href="profile candidate.php">Profile Candidate</a>
        <!-- Candidate profile details here -->
    </div>
    <div class="card profile">
        <a href="profile party.php">Profile Party</a>
        <!-- Party profile details here -->
    </div>
    <div class="card election-result">
        <a href="result in admin dashboard.php">Election Result</a>
        <!-- Display election results here -->
    </div>
</div>

<script>
    // JavaScript for logout functionality
    document.querySelector('.logout-button').addEventListener('click', function() {
        // Add logout functionality here
        alert("Logging out...");
        // Redirect user to logout page or perform logout actions
    });
</script>

</body>
</html>
