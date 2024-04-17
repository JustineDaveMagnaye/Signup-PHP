<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Dashboard</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
  background-image: url("rc.jpg");
  margin: 0;
  padding: 0;
}

.container {
  max-width: 1000px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

h2 {
  color: #b30000;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

button {
  background-color: #b30000;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px;
}

button:hover {
  background-color: #990000;
}

</style>
</head>
<body>

<div class="container">
  <h2>Welcome, Admin!</h2>
  <h2> STUDENT INFORMATION </h2>
  <?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "practicalmidterm";
  $conn = new mysqli($servername, $username, $password, $database);
  $check_query = "SELECT * FROM student";
  $run_query = mysqli_query($conn, $check_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<table>";
    echo "<tr><th>Student ID</th><th>Last Name</th><th>First Name</th><th>Middle Name</th><th>Address</th><th>Gender</th><th>Contact No</th><th>Email</th><th>Birthdate</th><th>Age</th><th>Religion</th></tr>";
    while($row = mysqli_fetch_array($run_query)) {
      echo "<tr>";
      echo "<td>" . $row['student_id'] . "</td>";
      echo "<td>" . $row['last_name'] . "</td>";
      echo "<td>" . $row['first_name'] . "</td>";
      echo "<td>" . $row['middle_name'] . "</td>";
      echo "<td>" . $row['address'] . "</td>";
      echo "<td>" . $row['gender'] . "</td>";
      echo "<td>" . $row['contact_no'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['birthdate'] . "</td>";
      echo "<td>" . $row['age'] . "</td>";
      echo "<td>" . $row['religion'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No information found.";
  }
  ?><br>
  <h2> STAFF INFORMATION </h2>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "practicalmidterm";
  $conn = new mysqli($servername, $username, $password, $database);
  $check_query = "SELECT * FROM staff";
  $run_query = mysqli_query($conn, $check_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<table>";
    echo "<tr><th>Staff ID</th><th>Last Name</th><th>First Name</th><th>Middle Name</th><th>Address</th><th>Gender</th><th>Contact No</th><th>Email</th><th>Birthdate</th><th>Age</th><th>Religion</th></tr>";
    while($row = mysqli_fetch_array($run_query)) {
      echo "<tr>";
      echo "<td>" . $row['staff_id'] . "</td>";
      echo "<td>" . $row['last_name'] . "</td>";
      echo "<td>" . $row['first_name'] . "</td>";
      echo "<td>" . $row['middle_name'] . "</td>";
      echo "<td>" . $row['address'] . "</td>";
      echo "<td>" . $row['gender'] . "</td>";
      echo "<td>" . $row['contact_no'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['birthdate'] . "</td>";
      echo "<td>" . $row['age'] . "</td>";
      echo "<td>" . $row['religion'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No information found.";
  }
  ?>
  <h2> GUEST INFORMATION </h2>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "practicalmidterm";
  $conn = new mysqli($servername, $username, $password, $database);
  $check_query = "SELECT * FROM guest";
  $run_query = mysqli_query($conn, $check_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<table>";
    echo "<tr><th>Last Name</th><th>First Name</th><th>Middle Name</th><th>Address</th><th>Gender</th><th>Contact No</th><th>Email</th><th>Birthdate</th><th>Age</th><th>Religion</th></tr>";
    while($row = mysqli_fetch_array($run_query)) {
      echo "<tr>";
      echo "<td>" . $row['last_name'] . "</td>";
      echo "<td>" . $row['first_name'] . "</td>";
      echo "<td>" . $row['middle_name'] . "</td>";
      echo "<td>" . $row['address'] . "</td>";
      echo "<td>" . $row['gender'] . "</td>";
      echo "<td>" . $row['contact_no'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['birthdate'] . "</td>";
      echo "<td>" . $row['age'] . "</td>";
      echo "<td>" . $row['religion'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "No information found.";
  }
  ?>
  <br>
  <button onclick="window.location.href='index.php'">Logout</button>
</div>

</body>
</html>
