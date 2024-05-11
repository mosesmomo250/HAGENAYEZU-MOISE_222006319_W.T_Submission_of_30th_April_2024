<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ballot Generation</title>
<style>
  /* CSS styles */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
  }
  .container {
    max-width: 800px;
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
  .ballot {
    margin-top: 20px;
  }
  .candidate {
    margin-bottom: 10px;
  }
  .party {
    font-weight: bold;
    margin-bottom: 5px;
  }
</style>
</head>
<body>
  <div class="container">
    <h1>Ballot Generation</h1>
    <div class="ballot">
      <h2>Presidential Election</h2>
      <div class="candidate">
        <span class="party">Democratic Party:</span> John Doe
      </div>
      <div class="candidate">
        <span class="party">Republican Party:</span> Jane Smith
      </div>
      <!-- Add more candidate options as needed -->
    </div>
    <div class="ballot">
      <h2>Parliamentary Election</h2>
      <div class="candidate">
        <span class="party">Green Party:</span> Michael Johnson
      </div>
      <div class="candidate">
        <span class="party">Libertarian Party:</span> Emily Brown
      </div>
      <!-- Add more candidate options as needed -->
    </div>
    <!-- Add more ballots for other elections as needed -->
  </div>
</body>
</html>
