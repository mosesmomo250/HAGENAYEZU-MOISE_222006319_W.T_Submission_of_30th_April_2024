<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Elections</title>
<style>
  /* CSS styles */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('555.jpg');
    background-color: #f9f9f9;
  }
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    background-image: url(none);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
  }
  .btn-container {
    text-align: center;
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
  <p><b>Election management for administrators involves the comprehensive oversight and execution of various tasks essential for the smooth functioning and integrity of electoral processes. Administrators play a pivotal role in ensuring fairness, transparency, and efficiency throughout the electoral cycle. This encompasses a range of responsibilities, including but not limited to candidate and party approval, ballot creation, election scheduling, voter registration, polling station management, result tabulation, and adherence to legal and regulatory frameworks. Furthermore, administrators may oversee the implementation of security measures to safeguard against fraud or tampering, as well as provide support and guidance to electoral staff and stakeholders. Effective election management requires meticulous planning, coordination, and adherence to established protocols to uphold the principles of democracy and instill public confidence in the electoral system. By meticulously managing every aspect of the electoral process, administrators uphold the democratic ideals of representation and ensure that the voices of citizens are accurately heard and reflected in the outcome of elections.



  </b></p>
  <div class="container">
    <h1>Manage Elections</h1>
    <table>
      <thead>
        <tr>
          <th>Election Name</th>
          <th>Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Presidential Election</td>
          <td>2024-07-15</td>
          <td>Ongoing</td>
          <td class="btn-container">
            <button class="btn" onclick="pauseElection('Presidential Election')">Pause</button>
            <button class="btn" onclick="closeElection('Presidential Election')">Close</button>
          </td>
        </tr>
        <tr>
          <td>Parliamentary Election</td>
          <td>2024-08-20</td>
          <td>Ongoing</td>
          <td class="btn-container">
            <button class="btn" onclick="pauseElection('Parliamentary Election')">Pause</button>
            <button class="btn" onclick="closeElection('Parliamentary Election')">Close</button>
          </td>
        </tr>
        <tr>
          <td>Local Government Election</td>
          <td>2024-09-10</td>
          <td>Ongoing</td>
          <td class="btn-container">
            <button class="btn" onclick="pauseElection('Local Government Election')">Pause</button>
            <button class="btn" onclick="closeElection('Local Government Election')">Close</button>
          </td>
        </tr>
        <tr>
          <td>City Mayor Election</td>
          <td>2024-10-05</td>
          <td>Ongoing</td>
          <td class="btn-container">
            <button class="btn" onclick="pauseElection('City Mayor Election')">Pause</button>
            <button class="btn" onclick="closeElection('City Mayor Election')">Close</button>
          </td>
        </tr>
        <tr>
          <td>School Board Election</td>
          <td>2024-11-15</td>
          <td>Ongoing</td>
          <td class="btn-container">
            <button class="btn" onclick="pauseElection('School Board Election')">Pause</button>
            <button class="btn" onclick="closeElection('School Board Election')">Close</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
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
    // JavaScript functions for managing elections
    function pauseElection(electionName) {
      // Simulate pausing election (to be replaced with actual functionality)
      alert("The " + electionName + " election has been paused.");
    }

    function closeElection(electionName) {
      // Simulate closing election (to be replaced with actual functionality)
      alert("The " + electionName + " election has been closed.");
    }
  </script>
</body>
</html>

