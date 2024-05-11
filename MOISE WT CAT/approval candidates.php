<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
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
    width: 100px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>
  <div class="container">
    <h1>Admin Dashboard</h1>
    <div class="section">
      <h2 class="section-header">Pending Candidate Registrations</h2>
      <table>
        <thead>
          <tr>
            <th>Candidate Name</th>
            <th>Position</th>
            <th>Approve/Reject</th>
          </tr>
        </thead>
        <tbody id="pendingRegistrations">
          <!-- Pending candidate registrations will be dynamically added here -->
        </tbody>
      </table>
    </div>
  </div>

  <script>
    // JavaScript for displaying pending candidate registrations
    document.addEventListener("DOMContentLoaded", function() {
      var pendingRegistrations = document.getElementById("pendingRegistrations");

      // Simulated pending candidate registrations data (to be replaced with real data)
      var pendingCandidates = [
        { name: "John Doe", position: "President" },
        { name: "Jane Smith", position: "District Leader" },
        // Add more pending candidates as needed
      ];

      // Display pending candidate registrations in the table
      pendingCandidates.forEach(function(candidate) {
        var row = document.createElement("tr");
        row.innerHTML = "<td>" + candidate.name + "</td>" +
                        "<td>" + candidate.position + "</td>" +
                        "<td><select><option value='approve'>Approve</option><option value='reject'>Reject</option></select></td>";
        pendingRegistrations.appendChild(row);
      });
    });
  </script>
</body>
</html>
