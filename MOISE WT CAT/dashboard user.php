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
            background-image: url('12345.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            color: white;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        header {
            background-color: transparent;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #4CAF50;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        nav a.selected {
            background-color: gray; /* Change color of selected button */
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .button {
            margin: 10px;
            padding: 15px 25px;
            font-size: 18px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 20px;
            transition: background-color 0.3s ease;
            position: relative;
        }

        .button:hover {
            background-color: #45a049;
        }

        .button:focus {
            outline: none;
        }

        .button::after {
            content: "";
            position: absolute;
            top: -10px;
            right: -10px;
            width: 50px;
            height: 50px;
            background-color:none;
            clip-path: polygon(0 0, 100% 0, 100% 100%);
            border-radius: 50%;
            z-index: -1;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        footer p {
            margin: 5px 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Voting System</h1>
        <nav>
            <a href="profile party.php" class="button">Party Profile</a>
            <a href="profile candidate.php" class="button">Candidate Profile</a>
            <a href="result in admin dashboard.php" class="button">Election Result</a>
            <a href="index.php" class="button">Log Out</a>
        </nav>
    </header>

    <div class="container">
        <h2 style="text-align: center;">Explore the System</h2>
        
    </div>
    <p><b>

        "Voting is a fundamental right and civic duty in democratic societies. It allows individuals to have a say in the governance of their communities, regions, and nations. Through voting, citizens can elect representatives who will make decisions on their behalf and shape public policies. It serves as a mechanism for expressing preferences, opinions, and values on various issues, ranging from social justice to economic policies. Moreover, voting provides a means for holding elected officials accountable for their actions and ensuring the principles of democracy are upheld. Overall, voting plays a crucial role in shaping the future and direction of societies, empowering individuals to participate in the democratic process and make their voices heard."</b></p>
    <footer>
        <p>RN1, huye, Rwanda</p>
        <p>Email: hagenayezumoise@gmail.com</p>
        <p>Phone: +250 789 773 232</p>
        <p>
            <a href="https://www.instagram.com/moses_rwanda">Facebook</a>
            <a href="https://www.instagram.com/moses_rwanda">Twitter</a>
            <a href="https://www.instagram.com/moses_rwanda">Instagram</a>
        </p>
    </footer>

    <script>
        document.querySelectorAll('.button').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.button').forEach(btn => btn.classList.remove('selected'));
                button.classList.add('selected');
            });
        });
    </script>
</body>
</html>
