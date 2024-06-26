<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Vote</title>
 <style>
  /* Reset default browser styles */
  body, h1, h2, p, ul, li, a {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #05c2f7;
    color: #333;
    line-height: 1.6;
  }

  header {
    background-color: #333;
    color: #ea8705;
    padding: 20px;
    text-align: center;
    position: relative;
  }

  header h1 {
    font-size: 3em;
    margin: 0;
    position: absolute;
    top: 10px;
    left: 10px;
  }

  nav {
    text-align: center;
    margin-top: 20px;
  }

  nav ul {
    list-style: none;
    padding: 0;
  }

  nav li {
    display: inline-block;
    margin-right: 20px;
  }

  nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  nav a:hover {
    background-color: #555;
  }

  main {
    padding: 20px;
    text-align: center;
  }

  main h2 {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
  }

  main p {
    margin-bottom: 20px;
    color: #555;
  }

  .buttons {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .buttons a {
    display: inline-block;
    padding: 15px 30px;
    background-color: #ff7f0e;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    margin: 0 10px;
  }

  .buttons a:hover {
    background-color: #e66100;
  }

  footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
  }

  .image-container {
    margin-bottom: 20px;
  }

  .image-container img {
    width: 50%; /* Adjust the width of the image */
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  }
 </style>
</head>
<body>
 <header>
  <h1><b>OV WAY</b></h1>
  <nav>
   <ul>
    <!-- Removed Home and Contact links -->
   </ul>
  </nav>
 </header>
 <main>
  <div class="buttons">
    <a href="Register.php">Get Started</a>
    <a href="guide.php">Guide</a>
  </div>
  <div class="image-container">
    <img src="11.jpg" alt="Voting Image">
  </div>
  <h2><b>Empower Your Voice</b> </h2>
  <p><b>Welcome to Vote System, where your voice matters!</b></p>
  <p><b>

    "Voting is a fundamental right and civic duty in democratic societies. It allows individuals to have a say in the governance of their communities, regions, and nations. Through voting, citizens can elect representatives who will make decisions on their behalf and shape public policies. It serves as a mechanism for expressing preferences, opinions, and values on various issues, ranging from social justice to economic policies. Moreover, voting provides a means for holding elected officials accountable for their actions and ensuring the principles of democracy are upheld. Overall, voting plays a crucial role in shaping the future and direction of societies, empowering individuals to participate in the democratic process and make their voices heard."</b></p>
 </main>
 <footer>
  <p>&copy; 2024 Vote</p>
 </footer>
</body>
</html>
